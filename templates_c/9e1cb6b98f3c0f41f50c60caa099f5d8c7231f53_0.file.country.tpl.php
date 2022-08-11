<?php
/* Smarty version 3.1.43, created on 2022-07-13 22:45:18
  from 'C:\OpenServer\domains\www\project\templates\country.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62cf20cec87022_37488204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e1cb6b98f3c0f41f50c60caa099f5d8c7231f53' => 
    array (
      0 => 'C:\\OpenServer\\domains\\www\\project\\templates\\country.tpl',
      1 => 1657741515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header-country.tpl' => 1,
    'file:card.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62cf20cec87022_37488204 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header-country.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="content-align">
    <div id="tours" class="popular-tours">
        <div class="header">Тури</div>
        <?php $_smarty_tpl->_subTemplateRender("file:card.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
        <div id="photos">
            <div class="country-photo-container"  data-aos="fade-down" data-aos-once="true">
                <div class="country-photo-div">
                    <img id="country-photo-1" src="<?php echo $_smarty_tpl->tpl_vars['collage_image']->value;?>
-01.jpg">
                </div>
                <div class="country-photo-div">
                    <img id="country-photo-2" src="<?php echo $_smarty_tpl->tpl_vars['collage_image']->value;?>
-02.jpg">
                </div>
                <div class="country-photo-div">
                    <img id="country-photo-3" src="<?php echo $_smarty_tpl->tpl_vars['collage_image']->value;?>
-03.jpg">
                </div>
                <div class="country-photo-div">
                    <img id="country-photo-4" src="<?php echo $_smarty_tpl->tpl_vars['collage_image']->value;?>
-04.jpg">
                </div>
                <div class="country-photo-div">
                    <img id="country-photo-5" src="<?php echo $_smarty_tpl->tpl_vars['collage_image']->value;?>
-05.jpg">
                </div>
                <div class="country-photo-div">
                    <img id="country-photo-6" src="<?php echo $_smarty_tpl->tpl_vars['collage_image']->value;?>
-06.jpg">
                </div>
                <div class="country-photo-div">
                    <img id="country-photo-7" src="<?php echo $_smarty_tpl->tpl_vars['collage_image']->value;?>
-07.jpg">
                </div>
            </div>
        </div>
</div>
<?php echo '<script'; ?>
 src="js/cards.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
