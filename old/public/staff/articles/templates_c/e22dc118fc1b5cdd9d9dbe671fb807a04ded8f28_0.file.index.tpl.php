<?php
/* Smarty version 3.1.32, created on 2018-08-20 18:39:27
  from 'C:\xampp\htdocs\simple_blog\public\tpls\staff\articles\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7aeebfb07c23_60907562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e22dc118fc1b5cdd9d9dbe671fb807a04ded8f28' => 
    array (
      0 => 'C:\\xampp\\htdocs\\simple_blog\\public\\tpls\\staff\\articles\\index.tpl',
      1 => 1534782475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7aeebfb07c23_60907562 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main">
    <div class="content container">
      <div class="row">
        <div class="article-list col-md-8 col-md-offset-1">
            <div class="add_article">
                <a href="new_article.php">Добавить статью</a>
            </div>
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
           
            <div class="article">
            
                    <h2 class="a-title"><?php echo $_smarty_tpl->tpl_vars['article']->value['subject'];?>
</h2>
                    <div class="a-info"><?php echo $_smarty_tpl->tpl_vars['article']->value['create_date'];?>
</div>
                    <div class="a-content"><?php echo $_smarty_tpl->tpl_vars['article']->value['full_text'];?>
                    
                    </div>   <!-- a-content -->
                    <div class="a-footer">
                    <div class="comments"> 0 комментариев </div>
                    <div class="editing col-sm-offset-6"><a href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">Редактировать</a></div>
                    <div class="visible"> Статья показывается:</div>
                     </div> <!-- a-footer -->
               
            </div>
            <!-- article -->
         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
         </div>
        <!-- article-list -->
      
      </div>
        <!-- row  -->
    </div>
    <!-- content container -->
</div> 
    <!-- end of main  -->
  
   
    <?php }
}
