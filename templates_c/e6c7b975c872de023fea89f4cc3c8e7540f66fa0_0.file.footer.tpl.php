<?php
/* Smarty version 3.1.43, created on 2022-06-18 19:44:18
  from 'C:\OpenServer\domains\www\kursovayaOOP\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62ae00e2c34bd4_64476614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6c7b975c872de023fea89f4cc3c8e7540f66fa0' => 
    array (
      0 => 'C:\\OpenServer\\domains\\www\\kursovayaOOP\\templates\\footer.tpl',
      1 => 1655570506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ae00e2c34bd4_64476614 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--            footer-->
<div class="footer ">
    <div class="content-align">
        <div class="footer-content">
            <div class="footer-title">TRAVEL</div>
            <div class="menu-footer">
                <div class="footer-title">МЕНЮ</div>
                <div class="menu-content">
                    <nav>
                        <li><a class="mf-text" href="#popularTours">Популярні тури</a></li>
                        <li><a class="mf-text" href="#aboutCompany">Про копанію</a></li>
                        <li><a class="mf-text" href="#reviews">Відгуки</a></li>
                        <li><a class="mf-text" href="#contacts">Контакти</a></li>
                    </nav>
                </div>
            </div>
            <div class="address-footer">
                <div class="footer-title">АДРЕСА</div>
                <div class="address-content">
                    <div class="mf-text">м.Одеса</div>
                    <div class="mf-text">Вул. Дерібасівська, 12</div>
                </div>
            </div>
            <div class="workTime-footer">
                <div class="footer-title">ГРАФІК РОБОТИ</div>
                <div class="workTime-content">
                    <div class="mf-text">Понеділок - п'ятниця: 9:00 - 20:00</div>
                    <div class="mf-text">Субота - неділя: 9:00 - 18:00</div>
                </div>
            </div>
            <div class="page-up-arrow">
                <img id="page-up" src="images/page-up.png">
            </div>
        </div>
    </div>
</div>
<!--            end footer-->

<!--            end main body-->


<?php echo '<script'; ?>
 src="js/script.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/user.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/calendar/moment.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/calendar/daterangepicker.min.js"><?php echo '</script'; ?>
>
<link href="js/calendar/daterangepicker.css" type="text/css" rel="stylesheet">

</body>
</html>



<?php }
}
