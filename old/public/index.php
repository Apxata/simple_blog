<?php

define( '_ROOT_DIR', getcwd() );
define( '_CFG_DIR', getcwd() . '/staff/' );

require_once('../private/initialize.php');

error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors','On');

//$site = new Route();
//$site->render();

    //ищем статьи постранично
    if (isset($_GET['page'])){
        $current_page = $_GET['page'];
    }else {
        $current_page = 1 ;
    }
    $per_page = 10 ;
    $total_count = Article::count_all_visible();

    $pagination = new Pagination($current_page, $per_page, $total_count);
    $offset = $pagination->offset();

    $articles = Article::find_all_visible_articles_per_page($per_page, $offset);
    $Parsedown = new Parsedown();
    $Parsedown->setSafeMode(true);

    foreach ($articles as &$a) {
        $a['full_text'] =  nl2br($Parsedown->line($a['full_text']));
        $comms = Comment::count_all_comments($a['id']);
        $a['count_comments'] = array_shift($comms);
    }

    //Подключаем шаблонизатор СМАРТИ
    $smarty = new Smarty;
    $smarty->assign('articles', $articles);

        // <!-- подключаем футер -->
    include(SHARED_PATH . '/public_header.php');

    $smarty->display(PUBLIC_PATH . ('/tpls/index.tpl'));
    //Вывод пагинации
    $url = root_path('/index.php');
    echo $pagination->page_links();

    include(SHARED_PATH . '/public_footer.php');
 