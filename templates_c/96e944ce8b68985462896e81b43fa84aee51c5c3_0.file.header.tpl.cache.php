<?php
/* Smarty version 3.1.43, created on 2022-05-26 16:06:55
  from 'C:\OpenServer\domains\www\kursovayaOOP\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_628f7b6fb179e8_96161998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96e944ce8b68985462896e81b43fa84aee51c5c3' => 
    array (
      0 => 'C:\\OpenServer\\domains\\www\\kursovayaOOP\\templates\\header.tpl',
      1 => 1653570412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628f7b6fb179e8_96161998 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '127151745628f7b6faf2022_18828660';
?>

<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>TRAVEL-NEW</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="libs/css/bootstrap-icons-1.8.1/bootstrap-icons.css">

</head>
<body>
<div class="banner">
	<div class="<?php echo $_smarty_tpl->tpl_vars['headerBG']->value;?>
"></div>
	<div class="header-menu">
		<div class="container">
			<!--                <nav>-->
			<!--                    <div id="navbar-header">-->
			<!--                        <div class="hamburger-menu ">-->
			<!--                            <input id="menuToggle" type="checkbox" />-->
			<!--                            <label class="menuBTN" for="menuToggle">-->
			<!--                                <span></span>-->
			<!--                            </label>-->
			<!--                            <ul class="menuBox" >-->
			<!--                                <li><a class="menuItem" href="#popularTours">ПОПУЛЯРНІ ТУРИ</a></li>-->
			<!--                                <li><a class="menuItem" href="#aboutCompany">ПРО КОМПАНІЮ</a></li>-->
			<!--                                <li><a class="menuItem" href="#reviews">ВІДГУКИ</a></li>-->
			<!--                                <li><a class="menuItem" href="#contacts">КОНТАКТИ</a></li>-->
			<!--                                <li><a class="menuItem" href="#">КРАЇНИ</a></li>-->
			<!--                                <li><a class="menuItem" href="#">ДОПОМОГА</a></li>-->
			<!--                            </ul>-->
			<!--                        </div>-->
			<!--                    </div>-->
			<!--                </nav>-->

			<div class="menu-btn">
				<img src="images/menu.png">
				<span>МЕНЮ</span>
			</div>

			<div id="menu-line">
				<nav>
					<li><a class="menu-line-item" href="#popularTours">Популярні тури</a></li>
					<li><a class="menu-line-item" href="#aboutCompany">Про компанію</a></li>
					<li><a class="menu-line-item" href="#reviews">Відгуки</a></li>
					<li><a class="menu-line-item" href="#contacts">Контакти</a></li>
					<li><a class="menu-line-item" href="#">Країни</a></li>
				</nav>
			</div>




			<div class="search">
				<input name="search" id="srch" placeholder="Пошук">
				<i class="bi bi-search"></i>
			</div>
			<div class="profile">
				<!--                    <i class="bi bi-person-circle"></i>-->
				<img class="bi-person-circle" src="images/userAccount.png">
			</div>
		</div>
	</div>
	<div class="content-align">
		<div class="travel-header">
			<img src="images/travel/T.png" class="letter">
			<img src="images/travel/R.png" class="letter">
			<img src="images/travel/A.png" class="letter">
			<img src="images/travel/V.png" class="letter">
			<img src="images/travel/E.png" class="letter">
			<img src="images/travel/L.png" class="letter">
		</div>
		<div class="title-company">COMPANY</div>

		<div class="info-banner">
			<div class="social-media">
				<div class="inst">
					<!--                        <i class="bi bi-instagram"></i>-->
					<img class="bi-instagram" src="images/inst-icon.png">
				</div>
				<div class="fb">
					<!--                        <i class="bi bi-facebook"></i>-->
					<img class="bi-facebook" src="images/fb-icon.png">
				</div>
			</div>

			<div class="text-info">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
			</div>
		</div>
	</div>
</div>
<!--            end banner-->
<?php }
}
