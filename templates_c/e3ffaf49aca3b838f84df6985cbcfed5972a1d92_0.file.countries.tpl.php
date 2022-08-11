<?php
/* Smarty version 3.1.43, created on 2022-07-13 22:58:38
  from 'C:\OpenServer\domains\www\project\templates\countries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62cf23eee5a126_69351538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3ffaf49aca3b838f84df6985cbcfed5972a1d92' => 
    array (
      0 => 'C:\\OpenServer\\domains\\www\\project\\templates\\countries.tpl',
      1 => 1657742309,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62cf23eee5a126_69351538 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="content-align">
    <div id="popularTours" class="popular-tours">
        <div class="countries-arrow-container" data-aos="fade-right">
            <span class="countries-path"><h4><a href="index.php">Головна сторінка</a></h4></span>
            <span><img src="images/countries-arrow.png"></span>
            <span class="countries-path">Країни</span>
        </div>
        <div class="header header-country">Країни</div>
        <div class="country-cards">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
                <div class="country-card" country-by-id="country-card-bg-<?php echo $_smarty_tpl->tpl_vars['country']->value->getID();?>
" >
                    <div class="country-card-bg" id="country-card-bg-<?php echo $_smarty_tpl->tpl_vars['country']->value->getID();?>
" style="background: url('images/countries/<?php echo $_smarty_tpl->tpl_vars['country']->value->getMainImage();?>
');background-size: cover"></div>
                    <div class="country-card-info ">
                        <div>
                            <?php echo $_smarty_tpl->tpl_vars['country']->value->getName();?>

                        </div>
                    </div>
                    <div class="country-card-full-info hidden ">
                        <div class="country-card-title">
                            <?php echo $_smarty_tpl->tpl_vars['country']->value->getName();?>

                        </div>
                        <div class="country-card-description">
                            <?php echo $_smarty_tpl->tpl_vars['country']->value->getDescription();?>

                        </div>
                        <button class="country-card-btn" onclick="showCountry(<?php echo $_smarty_tpl->tpl_vars['country']->value->getID();?>
)">Переглянути</button>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</div>


<?php echo '<script'; ?>
>
    $(function(){
        onCountryPageLoad();
    });
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
