<?php
/* Smarty version 3.1.32, created on 2020-05-22 05:19:40
  from '/var/www/blog.apxat.local/public/staff/tpls/users/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ec760ec4892c9_94064156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85ebe778bd3b82d5068aefce0714b375aa2e440c' => 
    array (
      0 => '/var/www/blog.apxat.local/public/staff/tpls/users/index.tpl',
      1 => 1590123514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec760ec4892c9_94064156 (Smarty_Internal_Template $_smarty_tpl) {
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
