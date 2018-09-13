<?php
/* Smarty version 3.1.32, created on 2018-09-13 16:44:11
  from 'C:\WinNMP\WWW\apxat\public\tpls\registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9a93dbbbb4f3_57513273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05be93ec365bd9ebe996fc77d123671719a0bfc9' => 
    array (
      0 => 'C:\\WinNMP\\WWW\\apxat\\public\\tpls\\registration.tpl',
      1 => 1536857043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9a93dbbbb4f3_57513273 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main">
    <div class="content container">
        <div class="row">
            <div class="redaktor col-md-8 col-md-offset-1">
                <h2>Добавление нового пользователя </h2>

                <!-- выводим сообщение об ошибках если есть  -->
                <?php if (isset($_smarty_tpl->tpl_vars['errors']->value)) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'er');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['er']->value) {
?>
                        <?php echo $_smarty_tpl->tpl_vars['er']->value;?>

                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>

                <form class="form-horizontal" action="registration.php" method="post">
                    <h2 class="a-title"></h2>
                    <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Почта(логин)</label>
                        <div class="col-sm-10">
                            <input type="email" name="user[email]" class="form-control" id="inputEmail" placeholder="Почта(логин)" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nickname" class="col-sm-2 control-label">Ваш псевдоним</label>
                        <div class="col-sm-10">
                            <input type="text" name="user[nickname]" class="form-control" id="nickname" placeholder="Ваш псевдоним" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword1" class="col-sm-2 control-label">Пароль</label>
                        <div class="col-sm-10">
                            <input type="password" name="user[password]" class="form-control" id="inputPassword1" placeholder="пароль">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword2" class="col-sm-2 control-label">Повторите пароль</label>
                        <div class="col-sm-10">
                            <input type="password" name="user[confirm_password]" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                    </div>
                    <div id="operations">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input class="btn btn-block btn-lg" type="submit" value="Зарегаться" />
                        </div>    <!-- col-sm-offset-2 col-sm-10 -->

                    </div>
                    <!-- operations -->
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
