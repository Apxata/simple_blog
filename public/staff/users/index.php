<?php require_once('../../../private/initialize.php'); ?>

<?php $page_title = 'Пользователи'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

     
<div class="main">
    <div class="content container">
      <div class="row">
        <div class="article-list col-md-8 col-md-offset-1">
            <div class="add_article">
                <a href="new_article.php">Добавить статью</a>
            </div>
           
            <div class="article">
            
                    <h2 class="a-title"></h2>
                    <div class="a-info"></div>
                    <div class="a-content">
                           
                    </div>   <!-- a-content -->
                 
                    <div class="a-footer">
                    <div class="comments"> 0 комментариев </div>
                    <div class="editing col-sm-offset-6"><a href="edit.php?id=">Редактировать</a></div>
                    <div class="visible"> Статья показывается:</div>
                     </div> <!-- a-footer -->
               
            </div>
            <!-- article -->
          
         </div>
        <!-- article-list -->
      
      </div>
        <!-- row  -->
    </div>
    <!-- content container -->
</div> 
    <!-- end of main  -->
  
   
       <?php include(SHARED_PATH . '/staff_footer.php'); ?>
       
   