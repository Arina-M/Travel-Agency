<?php
/* Smarty version 3.1.43, created on 2022-08-13 20:31:42
  from 'C:\OpenServer\domains\www\project\templates\signIn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62f7dffe5eda99_33940793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a093082c0d6e986af3dc9636c653a11734a118e7' => 
    array (
      0 => 'C:\\OpenServer\\domains\\www\\project\\templates\\signIn.tpl',
      1 => 1660411748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62f7dffe5eda99_33940793 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>

</head>
<body>
<div class="profile-page sign-in-page">
    <div class="content-align">
        <div class="close-btn-black" id="close-profile-x">
            <img src="images/close-black.png">
        </div>
        <div class="form-content">
            <form id="signin-form" action="signIn.php" method="post">
                <input type="hidden" name="action" value="signIn">
            <div class="form">
                <div class="sign">ВХІД ДО ОСОБИСТОГО КАБІНЕТУ</div>
                <div class="error-msg"><?php echo $_smarty_tpl->tpl_vars['signIn_error_msg']->value;?>
</div>
                <div class="input-group">
                    <label>
                        <input type="email" maxlength="128" name="email" class="input-text" id="email-singIn" placeholder="E-mail">
                    </label>
                    <div class="password-signIn-container">
                        <label>
                            <input type="password" maxlength="100" name="password" class="input-text" id="password-singIn" placeholder="Пароль">
                        </label>
                        <div class="btn-show-hide-password">
                            <div id="show-password"><img src="images/show-password.png"></div>
                            <div id="hide-password"><img src="images/hide-password.png"></div>
                        </div>
                    </div>
                </div>
                <button id="sign-in" class="btn-action">Увійти</button>
                <div style="display: flex; justify-content: right">
                    <a href="registration.php"><div id="registration-link">Реєстрація</div></a>
                </div>
            </div>
            </form>
        </div>
    </div>


</div>
<?php echo '<script'; ?>
 src="js/user.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
