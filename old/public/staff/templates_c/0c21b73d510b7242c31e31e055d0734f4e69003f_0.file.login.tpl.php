<?php
/* Smarty version 3.1.32, created on 2020-05-22 17:44:27
  from '/var/www/blog.apxat.local/public/staff/tpls/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ec80f7b7613e2_74905560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c21b73d510b7242c31e31e055d0734f4e69003f' => 
    array (
      0 => '/var/www/blog.apxat.local/public/staff/tpls/login.tpl',
      1 => 1590123514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec80f7b7613e2_74905560 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Точка входа</h1>
                        <hr class="small">
                        <span class="subheading">Введите ваш email и пароль</span>
                    </div>
                </div>
            </div>
        </div>
</header>
   
<form action="login.php" method="post">
<table class="table">
    <tr class="info">
        <th>Параметр</th>
        <th>Значение</th>
    </tr>
    <tr>
        <td> Почта(логин)</td>
        <td><input id="email" type="email" name="email" value="" required="required"></td>
        
    </tr>        
    <tr>
        <td> Пароль </td>
        <td><input id="password" type="password" name="password" value="" required="required"></td>
    </tr>  
    
</table>
     <div class="container-fluid">
          <input type="submit" name= "submit" value="Отправить" class="btn btn-primary col-lg-3 col-lg-offset-3" >   
    </div>
</form><?php }
}
