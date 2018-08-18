<?php require_once('../../../private/initialize.php'); ?>

<?php $page_title = 'Статьи'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); 

$page_title = 'Статьи'; 
$smarty = new Smarty;

$article = new Article;
$articles = $article->find_all();
?>

     
<div class="main">
    <div class="content container">
      <div class="row">
        <div class="article-list col-md-8 col-md-offset-1">
            <div class="add_article">
                <a href="new_article.php">Добавить статью</a>
            </div>
            <?php   foreach($articles as $article) {  ?>
            <div class="article">
            
                    <h2 class="a-title"><?php echo h($article->subject); ?></h2>
                    <div class="a-info"><?php echo h($article->create_date); ?></div>
                    <div class="a-content">
                   <?php $Parsedown = new Parsedown(); 
                     echo nl2br($Parsedown->text($article->full_text)) ;
                   ?>
                    </div>   <!-- a-content -->
                 
                    <div class="a-footer">
                    <div class="comments"> 0 комментариев </div>
                    <div class="editing col-sm-offset-6"><a href="edit.php?id=">Редактировать</a></div>
                    <div class="visible"> Статья показывается:</div>
                     </div> <!-- a-footer -->
               
            </div>
            <!-- article -->
            <?php }  ?>
         </div>
        <!-- article-list -->
      
      </div>
        <!-- row  -->
    </div>
    <!-- content container -->
</div> 
    <!-- end of main  -->
  
   
       <?php include(SHARED_PATH . '/staff_footer.php'); ?>
       