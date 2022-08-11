<?php
/* Smarty version 3.1.43, created on 2022-06-18 15:24:51
  from 'C:\OpenServer\domains\www\kursovayaOOP\templates\country.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62adc4130b99b3_00589702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '014fe9c1380dea92bc0af70d6a3b5960ae9469af' => 
    array (
      0 => 'C:\\OpenServer\\domains\\www\\kursovayaOOP\\templates\\country.tpl',
      1 => 1655553831,
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
function content_62adc4130b99b3_00589702 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header-country.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="content-align">
    <div id="tours" class="popular-tours">
        <div class="header">Тури</div>
        <?php $_smarty_tpl->_subTemplateRender("file:card.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
        <div id="photos">
            <img src="<?php echo $_smarty_tpl->tpl_vars['collage_image']->value;?>
" class="collage-img">
        </div>
</div>
<?php echo '<script'; ?>
 src="js/cards.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
