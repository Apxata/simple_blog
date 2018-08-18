<?php require_once('../../../private/initialize.php'); 

//login_required();
$page_title = 'Добавление статьи'; 
$errors = [];
$_SESSION['message']= "";

if(is_post_request()) {
    
    // create a RECORD using this params
    
    $args = $_POST['article'];
    // $args['author_id'] = $_SESSION['user_id'];

    $connect = DB::get_connect(); 
    $article = new Article($args);
    $result = $article->create($connect);
   

} else {
   // $article = new Article;
}

// формируем страницу

 include(SHARED_PATH . '/staff_header.php'); 

 $smarty = new Smarty;
 $smarty->display(PUBLIC_PATH . ('/tpls/staff/articles/new_article.tpl'));
       
 include(SHARED_PATH . '/staff_footer.php'); 