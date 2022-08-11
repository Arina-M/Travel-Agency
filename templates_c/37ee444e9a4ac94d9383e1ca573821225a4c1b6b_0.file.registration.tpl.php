<?php
/* Smarty version 3.1.43, created on 2022-06-19 19:40:57
  from 'C:\OpenServer\domains\www\kursovayaOOP\templates\registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62af51996ad1f6_37065453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37ee444e9a4ac94d9383e1ca573821225a4c1b6b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\www\\kursovayaOOP\\templates\\registration.tpl',
      1 => 1655656803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62af51996ad1f6_37065453 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/style.css">
    <?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>


</head>
<body>
<div class="profile-page registration-page">
    <div class="content-align">
        <div class="close-btn-black" id="close-profile-x">
            <img src="images/close-black.png">
        </div>
        <div class="form-content">
            <div class="form reg-form">
                <form method="post" action="registration.php" id="reg-form">
                <input type="hidden" name="action" value="register">
                <div class="sign">РЕЄСТРАЦІЯ</div>
                <div class="error-msg"><?php echo $_smarty_tpl->tpl_vars['registration_error_msg']->value;?>
</div>

                <div class="input-group">
                    <div class="input-section">
                        <label>
                            <span>
                                <input type="text" class="input-text registration right-margin" id="surname-registration" name="surname" placeholder="Прізвище" maxlength="32">
                            </span>
                            <span>
                                <input type="text" class="input-text registration" id="forename-registration" name="forename" placeholder="Ім'я" maxlength="32">
                            </span>
                        </label>
                    </div>
                    <div class="input-section">
                        <label>
                            <input type="text" class="input-text registration right-margin" id="phoneNum-registration" name="phoneNum" placeholder="Номер телефону" maxlength="16">
                            <input type="email" class="input-text registration" id="email-registration" name="email" placeholder="E-mail" maxlength="128">
                        </label>
                    </div>
                    <div class="input-section">
                        <label>
                            <input type="password" class="input-text" id="password-singIn" name="password-singIn" placeholder="Пароль">
                        </label>
                        <div class="btn-show-hide-password">
                            <div id="show-password"><img src="images/show-password.png"></div>
                            <div id="hide-password"><img src="images/hide-password.png"></div>
                        </div>

                    </div>
                </div>
                <button id="sign-up" class="btn-action">Зареєструватись</button>
                </form>
            </div>
        </div>
    </div>


</div>
<?php echo '<script'; ?>
 src="js/user.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
