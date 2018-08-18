<?php
require_once('../../../private/initialize.php');

// login_required();

$page_title = 'Редактирование статьи'; 

//Проверяем передан ли айди, если нет то отправляем на индекс
if(!isset($_GET['id'])) {
  redirect_to('index.php');
}
$id = $_GET['id'];
$connection = DB::get_connect();
$article = Article::find_article_by_id($connection, $id); 

if($article == false) {
  redirect_to('index.php');
}

if(is_post_request()) {

  $connection = DB::get_connect();
  // Save record using post parameters
  $args = $_POST['article'];
  $article = new Article($args);  
  $result = $article->update($connection, $id);
  
  if($result === true) {
    $_SESSION['message'] = 'Статья успешно отредактирована';
    redirect_to('index.php');
  } else {
    // show errors 
    $_SESSION['message'] = 'Что то пошло не так';
    redirect_to('edit.php?id=' . h(u($id))); 
  }

} else {

  
  // display the form

}

// Обрабатываем текст, чтобы показывал разметку маркдаун
// $Parsedown = new Parsedown();
// foreach ($article as &$a) {
//     $a['full_text'] =  nl2br($Parsedown->text($a['full_text']));
// }

// Формируем html

include(SHARED_PATH . '/staff_header.php');

$smarty = new Smarty;
$smarty->assign('article', $article);
$smarty->display(PUBLIC_PATH . ('/tpls/staff/articles/edit.tpl'));

include(SHARED_PATH . '/staff_footer.php'); 


