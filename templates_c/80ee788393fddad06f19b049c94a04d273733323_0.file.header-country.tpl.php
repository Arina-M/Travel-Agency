<?php
/* Smarty version 3.1.43, created on 2022-06-19 19:17:30
  from 'C:\OpenServer\domains\www\kursovayaOOP\templates\header-country.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62af4c1a0bcc82_62561932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80ee788393fddad06f19b049c94a04d273733323' => 
    array (
      0 => 'C:\\OpenServer\\domains\\www\\kursovayaOOP\\templates\\header-country.tpl',
      1 => 1655645917,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62af4c1a0bcc82_62561932 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>TRAVEL</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery.spincrement.min.js"><?php echo '</script'; ?>
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
<div class="banner">
	<?php if ($_smarty_tpl->tpl_vars['mainHeader']->value == true) {?><div class="bg-img <?php echo $_smarty_tpl->tpl_vars['headerBG']->value;?>
" style="<?php if (strlen($_smarty_tpl->tpl_vars['headerBGImage']->value)) {?>background: url('<?php echo $_smarty_tpl->tpl_vars['headerBGImage']->value;?>
');background-size:cover;<?php }?>"></div><?php }?>
	<div class="header-menu">
		<div class="container">
			<div class="menu-btn">
				<img src="images/menu.png">
				<span id="menu" class="menu-title">МЕНЮ</span>
			</div>
			<div id="menu-line" class="menu-container hidden">
				<nav>
					<li><a class="menu-line-item" href="#tours">Тури</a></li>
					<li><a class="menu-line-item" href="#photos">Фото</a></li>
					<li id="main-page-country"><a class="menu-line-item" href="index.php">Головна сторінка</a></li>
					<li id="countries-country"><a class="menu-line-item" href="countries.php">Країни</a></li>
				</nav>
			</div>
			<div class="search">
				<input name="search" class="search-input" id="srch" placeholder="Введіть країну">
				<ul class="search-input">
					<li><div>Україна</div></li>
					<li><div>Бразилія</div></li>
					<li><div>Греція</div></li>
					<li><div>Мальдіви</div></li>
					<li><div>Таїланд</div></li>
				</ul>
				<div id="search-img">
					<img id="search-icon" class="bi-search" src="images/search-icon.png">
				</div>
			</div>
			<div class="profile">
				<a href="signIn.php"><img class="bi-person-circle" src="images/userAccount.png"></a>
			</div>
		</div>
	</div>

	<?php if ($_smarty_tpl->tpl_vars['mainHeader']->value == true) {?>

	<div class="content-align">
		<div class="travel-header">
			<img src="<?php echo $_smarty_tpl->tpl_vars['main_image_caption']->value;?>
" class="letter">
		</div>
		<div class="title-company"><?php echo $_smarty_tpl->tpl_vars['region_name']->value;?>
</div>
		<div class="info-banner">
			<div class="text-info">
				<?php echo $_smarty_tpl->tpl_vars['country_description']->value;?>

			</div>
		</div>
	</div>
	<?php }?>
</div>
<!--            end banner-->
<?php }
}
