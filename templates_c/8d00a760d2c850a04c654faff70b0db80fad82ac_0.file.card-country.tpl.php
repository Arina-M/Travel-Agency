<?php
/* Smarty version 3.1.43, created on 2022-06-17 14:01:47
  from 'C:\OpenServer\domains\www\kursovayaOOP\templates\card-country.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62ac5f1b21fc52_90397768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d00a760d2c850a04c654faff70b0db80fad82ac' => 
    array (
      0 => 'C:\\OpenServer\\domains\\www\\kursovayaOOP\\templates\\card-country.tpl',
      1 => 1655463700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ac5f1b21fc52_90397768 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="tours" class="popular-tours">
    <div class="header">Тури</div>
    <div style="display: flex;">
        <div class="switch-button">
            <input class="switch-button-checkbox" type="checkbox">
            <label class="switch-button-label" for=""><span class="switch-button-label-span">Всі</span></label>
        </div>
    </div>
    <div class="choose-tour">
        <span class="input-title" id="input-date">Дата <img class="input-arrow" src="images/input-arrow.png"></span>
        <span class="input-title type-input" id="input-type">Вид <img class="input-arrow" src="images/input-arrow.png"></span>
        <ul class="input-type-list">
            <li><div>Пригоди</div></li>
            <li><div>Релакс</div></li>
        </ul>
        <span class="input-title" id="input-price">Ціна <img class="input-arrow" src="images/input-arrow.png"></span>
        <div class="slider-container">
            <span class="min-price">$0</span>
            <span class="max-price">$500</span>
            <input type="range" min="10" max="500" value="250" class="slider" id="slider" step="10">
            <div id="current-price"></div>
        </div>
        <span class="input-title" id="input-clear-filter">Очистити фільтри</span>
    </div>
    <div class="carousel" id="carousel-card">
        <div class="arrow-btn" id="prev-cards"><img src="images/arrow-prev.png"></div>
        <div class="cards">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cards']->value, 'card');
$_smarty_tpl->tpl_vars['card']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['card']->value) {
$_smarty_tpl->tpl_vars['card']->do_else = false;
?>
                <div class="card <?php if (!$_smarty_tpl->tpl_vars['card']->value->getHot()) {?>nothot<?php }?>" >
                    <input type="hidden" class="card-date"  value="<?php echo $_smarty_tpl->tpl_vars['card']->value->getCompareDate();?>
">
                    <input type="hidden" class="card-type"  value="<?php echo $_smarty_tpl->tpl_vars['card']->value->getType();?>
">
                    <input type="hidden" class="card-price" value="<?php echo $_smarty_tpl->tpl_vars['card']->value->getPrice();?>
">
                    <div>
                        <div>
                            <img src="images/cards/<?php echo $_smarty_tpl->tpl_vars['card']->value->getMainImage();?>
" class="card-img">
                        </div>
                        <div class="card-info">
                            <div>
                                <div class="card-info-cat <?php echo $_smarty_tpl->tpl_vars['card']->value->getCardTypeClass();?>
"><?php echo $_smarty_tpl->tpl_vars['card']->value->getType();?>
</div>
                                <div class="card-info-days"><?php echo $_smarty_tpl->tpl_vars['card']->value->getDaysCount();?>
</div>
                            </div>
                            <div><h2><?php echo $_smarty_tpl->tpl_vars['card']->value->getCardName();?>
</h2></div>
                            <div>
                                <div class="person"><span class="price"><?php echo $_smarty_tpl->tpl_vars['card']->value->getFullPrice();?>
</span> / Людина</div>
                                <div class="buttonOrder"><button full-card-id="full_card_<?php echo $_smarty_tpl->tpl_vars['card']->value->getId();?>
" class="btn-toOrder">Переглянути</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-data">
                        <div class="date"><?php echo (mb_strtoupper($_smarty_tpl->tpl_vars['card']->value->getDepartureDate(), 'UTF-8'));?>
</div>
                    </div>
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
        <div class="arrow-btn" id="next-cards"><img src="images/arrow-next.png"></div>
    </div>
    <div id="carousel-empty">Наразі тури відсутні</div>
</div><?php }
}
