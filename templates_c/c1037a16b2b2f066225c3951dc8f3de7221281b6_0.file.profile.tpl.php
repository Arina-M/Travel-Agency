<?php
/* Smarty version 3.1.43, created on 2022-06-19 19:03:54
  from 'C:\OpenServer\domains\www\kursovayaOOP\templates\profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62af48ea4e2f12_44135040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1037a16b2b2f066225c3951dc8f3de7221281b6' => 
    array (
      0 => 'C:\\OpenServer\\domains\\www\\kursovayaOOP\\templates\\profile.tpl',
      1 => 1655654630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62af48ea4e2f12_44135040 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/style.css">
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

        <div class="profile-info">
            <div class="user-personal-info">
                <div class="user-phoneNum">
                    <div class="user-info-title"><h3>Номер телефону</h3></div>
                    <span id="user-phoneNum"><?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
</span>
                </div>
                <div class="user-email">
                    <div class="user-info-title"><h3>E-mail</h3></div>
                    <span id="user-email"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</span>
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
                            <span class="ordered-tour" full-card-id="full_card_<?php echo $_smarty_tpl->tpl_vars['card']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['card']->value->getCountryName();?>
 - <?php echo $_smarty_tpl->tpl_vars['card']->value->getCardName();?>
</span>
                            <span class="cancel-tour" tour-id="<?php echo $_smarty_tpl->tpl_vars['card']->value->getId();?>
">Відмінити</span>
                        </div>
                        <div class="full_card hidden" id="full_card_<?php echo $_smarty_tpl->tpl_vars['card']->value->getId();?>
">
                            <div class="full_card_close_btn" full-card-id="full_card_<?php echo $_smarty_tpl->tpl_vars['card']->value->getId();?>
">X</div>
                            <div class="card_name"><h3><?php echo $_smarty_tpl->tpl_vars['card']->value->getCardName();?>
</h3></div>
                            <div>
                                <div class="full-card-img"><img id="card-img" src="images/cards/<?php echo $_smarty_tpl->tpl_vars['card']->value->getMainImage();?>
"></div>
                                <div class="full-card-info">
                                    <div><h4>Тривалість:</h4><span><?php echo $_smarty_tpl->tpl_vars['card']->value->getDaysCount();?>
</span></div>
                                    <div><h4>Вид:</h4><span><?php echo $_smarty_tpl->tpl_vars['card']->value->getType();?>
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
                                    <div><h4>Опис:</h4> <div id="card-description"><?php echo $_smarty_tpl->tpl_vars['card']->value->getDescription();?>
</div></div>
                                                                    </div>
                            </div>
                        </div>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
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
