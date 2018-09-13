<?php
/* Smarty version 3.1.32, created on 2018-09-13 16:40:32
  from 'C:\WinNMP\WWW\apxat\public\staff\tpls\articles\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9a9300c2ee37_89802863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccb7eaef12fc491e1d3ac6541da120d20866c542' => 
    array (
      0 => 'C:\\WinNMP\\WWW\\apxat\\public\\staff\\tpls\\articles\\edit.tpl',
      1 => 1536763704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9a9300c2ee37_89802863 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main">
    <div class="content container">
      <div class="row">
        <div class="redaktor col-md-8 col-md-offset-1">
            <a class="btn btn-primary" href="index.php"> Вернуться обратно</a>
         
              <h1>Редактирование статьи</h1>
                  <!-- выводим сообщение об ошибках если есть  -->
               
              <form action="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" method="post">
                    <h2 class="a-title"></h2>
                    <input name="article[subject]" type="text" class="form-control" placeholder="Тема поста" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['subject'];?>
">  
                    <div class="a-content">
                        <textarea id="editor" name="article[full_text]" class="form-control" rows="20" cols="80" placeholder="Ваш текст"><?php echo $_smarty_tpl->tpl_vars['article']->value['full_text'];?>
</textarea>             
                        <hr>
                        <p>Видимость</p>
                        <label class="radio-inline">
                        <input type="radio" name="article[visible]" id="inlineRadio1" value="1" <?php if ($_smarty_tpl->tpl_vars['article']->value['visible'] == 1) {?> checked <?php }?>> Видно
                        </label>
                        <label class="radio-inline">
                        <input type="radio" name="article[visible]" id="inlineRadio2" value="0" <?php if ($_smarty_tpl->tpl_vars['article']->value['visible'] == 0) {?> checked <?php }?>> Скрыто
                        </label>
                    </div> <!-- a-content -->
                    <div id="operations">
                    <input class="btn btn-primary" type="submit" value="Отредактировать" />
                    </div>
              </form>

        </div>
        <!-- redaktor -->
      </div>
        <!-- row  -->
    </div>
    <!-- content container -->
</div> 
    <!-- end of main  -->
<?php }
}
