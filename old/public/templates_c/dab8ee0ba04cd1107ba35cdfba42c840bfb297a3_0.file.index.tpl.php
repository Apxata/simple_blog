<?php
/* Smarty version 3.1.32, created on 2018-09-12 16:03:13
  from 'C:\WinNMP\WWW\apxat.ru\public\tpls\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9938c1cd1c70_93491167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dab8ee0ba04cd1107ba35cdfba42c840bfb297a3' => 
    array (
      0 => 'C:\\WinNMP\\WWW\\apxat.ru\\public\\tpls\\index.tpl',
      1 => 1536763704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9938c1cd1c70_93491167 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main">
    <div class="content container">
      <div class="row">
        <div class="article-list">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
            <div class="article col-md-8 col-md-offset-1">

                    <h2 class="a-title"><?php echo $_smarty_tpl->tpl_vars['article']->value['subject'];?>
</h2>
                    <div class="a-info"><?php echo $_smarty_tpl->tpl_vars['article']->value['create_date'];?>
</div>
                    <div class="a-content"><?php echo $_smarty_tpl->tpl_vars['article']->value['full_text'];?>
</div>
                    <!-- a-content -->
                    <div class="a-footer"><a href="show.php?article_id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['count_comments'];?>
 коммент.</a></div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <!-- article -->
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
