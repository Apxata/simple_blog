<?php require_once('../../../private/initialize.php'); 

$page_title = 'Статьи'; 

// Connect to db
$conn = DB::get_connect(); 
// Делаем запрос и получаем все статьи
$articles = $conn->query(
    "SELECT * FROM articles ORDER BY create_date DESC ")->fetchAll();

include(SHARED_PATH . '/staff_header.php'); 

$Parsedown = new Parsedown();

foreach ($articles as &$a) {
   
    $a['full_text'] =  nl2br($Parsedown->text($a['full_text']));

}

$smarty = new Smarty;
$smarty->assign('articles', $articles);
$smarty->display(PUBLIC_PATH . ('/tpls/staff/article.tpl'));

include(SHARED_PATH . '/staff_footer.php'); 
       
   