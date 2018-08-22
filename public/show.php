<?php require_once('../private/initialize.php'); 
 
    //ищем статьи постранично
    if (isset($_GET['article_id'])){
        $article_id = $_GET['article_id'];
    } else {
        redirect_to('index.php');
    }

    // $per_page = 10 ;
    // $total_count = Article::count_all_visible();
    
    // $pagination = new Pagination($current_page, $per_page, $total_count);

    // $offset = $pagination->offset();
    $article = Article::find_article_by_id($article_id);
  
    $Parsedown = new Parsedown();
        $article['full_text'] =  nl2br($Parsedown->text($article['full_text']));

    // Пагинация для комментов
    // $url = url_for('/index.php');
    // echo $pagination->page_links();

    //Подключаем шаблонизатор СМАРТИ
    $smarty = new Smarty;
    $smarty->assign('article', $article);
        
    include(SHARED_PATH . '/public_header.php');

    $smarty->display(PUBLIC_PATH . ('/tpls/public/show.tpl'));
    
    include(SHARED_PATH . '/public_footer.php');