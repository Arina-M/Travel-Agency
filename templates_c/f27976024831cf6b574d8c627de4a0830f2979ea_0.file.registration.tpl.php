<?php
/* Smarty version 3.1.43, created on 2022-07-13 14:56:27
  from 'C:\OpenServer\domains\www\project\templates\registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62ceb2eb92cce3_26595162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f27976024831cf6b574d8c627de4a0830f2979ea' => 
    array (
      0 => 'C:\\OpenServer\\domains\\www\\project\\templates\\registration.tpl',
      1 => 1657711224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ceb2eb92cce3_26595162 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
