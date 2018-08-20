<?php require_once('../../../private/initialize.php'); 

$page_title = 'Статьи'; 

// Connect to db
//$connection = DB::get_connect(); 

// Делаем запрос и получаем все статьи
$articles = Article::find_all_articles();

// Обрабатываем текст, чтобы показывал разметку маркдаун
$Parsedown = new Parsedown();
foreach ($articles as &$a) {
    $a['full_text'] =  nl2br($Parsedown->text($a['full_text']));
}

// Формирование страницы для отображения

include(SHARED_PATH . '/staff_header.php'); 
//Подключаем шаблонизатор СМАРТИ
$smarty = new Smarty;
$smarty->assign('articles', $articles);
$smarty->display(PUBLIC_PATH . ('/tpls/staff/articles/index.tpl'));

include(SHARED_PATH . '/staff_footer.php'); 
       
   