<?php
/* Smarty version 3.1.43, created on 2022-08-13 19:47:35
  from 'C:\OpenServer\domains\www\project\templates\profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62f7d5a72843c0_42554052',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2585f5f74c398b4606a275c78f829dd3fcf7df30' => 
    array (
      0 => 'C:\\OpenServer\\domains\\www\\project\\templates\\profile.tpl',
      1 => 1660409200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62f7d5a72843c0_42554052 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        const pageType='<?php echo $_smarty_tpl->tpl_vars['pageType']->value;?>
';
        const loggedIn=parseInt(<?php echo $_smarty_tpl->tpl_vars['userLoggedIn']->value;?>
);
    <?php echo '</script'; ?>
>
</head>
<body>
<div class="blackout-bg"></div>

<div class="profile-page">
    <div class="profile-page-header">
        <div class="content-align">
            <div>
                <div>ОСОБИСТИЙ АКАУНТ</div>
                <div id="logOut">Вийти</div>
            </div>
            <div id="close-profile-x" style="cursor: pointer"><img src="images/close-white.png"></div>
        </div>
    </div>
    <div class="content-align">
        <div class="profile-data">
            <div id="profile-avatar">
                <img id="profile-avatar-img" src="images/photoUser.png">
            </div>
            <div id="profile-name">
                <div id="profile-name-surname"><?php echo $_smarty_tpl->tpl_vars['surname']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['forename']->value;?>
</div>
            </div>
        </div>

        <div id="profile-info-container">
            <div id="profile-line"></div>
            <div class="profile-info">
                <div class="user-personal-info">
                    <div class="user-phoneNum">
                        <div class="user-info-title"><h3>Номер телефону</h3></div>
                        <div class="user-info-container-phone ">
                            <div id="user-phoneNum"><?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
</div>
                            <div class="change" id="change-phone">Змінити</div>
                        </div>
                        <div class="user-info-container-change-phone user-info-hidden">
                            <input type="text" name="phone" id="changed-phone" placeholder="Введіть новий номер">
                            <div class="change" id="confirm-phone">Підтвердити</div>
                        </div>
                    </div>

                    <div class="user-email">
                        <div class="user-info-title"><h3>E-mail</h3></div>
                        <div class="user-info-container-email">
                            <div id="user-email"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</div>
                            <div class="change" id="change-email">Змінити</div>
                        </div>
                        <div class="user-info-container-change-email user-info-hidden">
                            <input type="email" name="email" id="changed-email" placeholder="Введіть нову пошту">
                            <div class="change" id="confirm-email">Підтвердити</div>
                        </div>
                    </div>
                </div>

                <div class="ordered-tours">
                    <div id="ordered-tours-title"><h3>Заброньовані тури</h3></div>
                    <div class="ordered-tours-list">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cards']->value, 'card');
$_smarty_tpl->tpl_vars['card']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['card']->value) {
$_smarty_tpl->tpl_vars['card']->do_else = false;
?>
                            <div class="ordered-tour-content">
                                <span class="show-full-tour-info">
                                    <span class="ordered-tour" full-card-id="full_card_<?php echo $_smarty_tpl->tpl_vars['card']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['card']->value->getCountryName();?>
 - <?php echo $_smarty_tpl->tpl_vars['card']->value->getCardName();?>
</span>
                                    <span class="arrow-show-full-tour-info"><img src="images/input-arrow.png" class="input-arrow"></span>
                                </span>
                                <span class="cancel-tour" tour-id="<?php echo $_smarty_tpl->tpl_vars['card']->value->getId();?>
">Відмінити</span>

                                <div class="full-tour hidden" id="full_card_<?php echo $_smarty_tpl->tpl_vars['card']->value->getId();?>
">
                                    <div class="full-tour-info">
                                        <div><h4>Тривалість:</h4><span><?php echo $_smarty_tpl->tpl_vars['card']->value->getDaysCount();?>
</span></div>
                                        <div><h4>Дата відправлення:</h4><span><?php echo $_smarty_tpl->tpl_vars['card']->value->getDepartureDate();?>
</span></div>
                                        <div><h4>Час відправлення:</h4><span><?php echo $_smarty_tpl->tpl_vars['card']->value->getDepartureTime();?>
</span></div>
                                        <div><h4>Дата прибуття:</h4><span><?php echo $_smarty_tpl->tpl_vars['card']->value->getReturnDate();?>
</span></div>
                                        <div><h4>Час прибуття:</h4><span><?php echo $_smarty_tpl->tpl_vars['card']->value->getReturnTime();?>
</span></div>
                                        <div><h4>Місто відправлення / прибуття:</h4><span><?php echo $_smarty_tpl->tpl_vars['card']->value->getDepartureCityName();?>
</span></div>
                                        <div><h4>Місце відправлення / прибуття:</h4><span><?php echo $_smarty_tpl->tpl_vars['card']->value->getDeparturePlaceName();?>
</span></div>
                                        <div><h4>Ціна:</h4><span><?php echo $_smarty_tpl->tpl_vars['card']->value->getFullPrice();?>
 (людина)</span></div>
                                    </div>
                                </div>

                                <div class="tour-line"></div>

                            </div>


                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<div class="cancel-tour-alert alert-hidden">
    <div class="cancel-tour-alert-container">
        <div class="cancel-tour-alert-text">Ви дійсно бажаєте відмінити тур?</div>
        <div class="cancel-tour-alert-buttons">
            <div class="cancel-tour-alert-button"><button id="cancel-tour-alert-button-yes"><span>Так</span></button></div>
            <div class="cancel-tour-alert-button"><button id="cancel-tour-alert-button-no"><span>Ні</span></button></div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
 src="js/user.js"><?php echo '</script'; ?>
>
</body>
</html>

<?php }
}
