<?php
/* Smarty version 3.1.32, created on 2018-09-12 15:52:14
  from 'C:\WinNMP\WWW\apxat.ru\public\tpls\staff\users\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b99362e1ecfe6_84837012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b517c8c87e814329a6f57e263ad11dffdda38cb1' => 
    array (
      0 => 'C:\\WinNMP\\WWW\\apxat.ru\\public\\tpls\\staff\\users\\index.tpl',
      1 => 1536763704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b99362e1ecfe6_84837012 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main">
    <div class="content container">
        <div class="row">
           <div class="user col-md-8 col-md-offset-1">
            <!-- USER ADD MENU -->
           <div class="add_user">
            <a href="new_user.php">Добавить пользователя</a>
           </div>  <!-- user add -->
          
        <h2>Список пользователей</h2>
        <table class="table table-bordered">
          <tr>
            <th>id</th>
            <th>Логин(почта)</th>
            <th>Дата регистрации</th>
            <th>Имя </th>
            <th>Фамилия</th>
            <th>Удален</th>
            <th>Редактировать</th>
          </tr>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?> 
          <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['reg_date'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['first_name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['last_name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['deleted'];?>
</td>
            <td><a href="edit_user.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">Ред</a></td>
          </tr>
   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
           </div>
            <!-- article -->
      </div>
        <!-- row  -->
    </div>
    <!-- content container -->
</div> 
    <!-- end of main  --><?php }
}
