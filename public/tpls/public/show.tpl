<div class="main">
    <div class="content container">
      <div class="row">
        <div class="article-list col-md-8 col-md-offset-1 ">
            <div class="article ">
                    <h2 class="a-title">{$article['subject']}</h2>
                    <div class="a-info">{$article['create_date']}</div>
                    <div class="a-content">{$article['full_text']}</div><!-- a-content -->
                    <div class="a-footer"></div>
            </div>  <!-- article -->
            <form>
            <textarea class="form-control" rows="1"></textarea>    
            <button type="submit" class="btn btn-default">Отправить</button>
            </form>
            <!-- вывод комментов  -->
            <div class="panel panel-primary">
            <div class="panel-heading">
                Никнейм
            </div>
            <div class="panel-body">Здесь будет написан коммент для новости</div>
            </div>
              
            </div><!-- comments    -->
          
         </div>
        <!-- article-list -->
      </div>
        <!-- row  -->
    </div>
    <!-- content container -->
</div> 
    <!-- end of main  -->