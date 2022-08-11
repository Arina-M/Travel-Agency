<?php
/* Smarty version 3.1.43, created on 2022-06-19 16:06:10
  from 'C:\OpenServer\domains\www\kursovayaOOP\templates\card.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62af1f4298d6d7_41086759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a98a92479cab1e78be60adf76ee8e552d05271d1' => 
    array (
      0 => 'C:\\OpenServer\\domains\\www\\kursovayaOOP\\templates\\card.tpl',
      1 => 1655643924,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62af1f4298d6d7_41086759 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div style="display: flex;">
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
"><img src="images/close-black.png"></div>
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
                            <div id="book-tour"><button class="btn-book-tour" book-tour-id="<?php echo $_smarty_tpl->tpl_vars['card']->value->getId();?>
">Забронювати</button></div>
                        </div>
                    </div>
                    <div class="successful-booking-alert" id="booking-success-win-<?php echo $_smarty_tpl->tpl_vars['card']->value->getID();?>
">
                        <div class="booking-alert-close-btn"><img src="images/close-black.png"></div>
                        <div class="sb-content">
                            <div class="sb-caption">
                                <div class="sb-title">
                                    <h3>Тур успішно заброньовано!</h3>
                                </div>
                                <div class="sb-text">
                                    Бажаємо Вам активного та веселого відпочинку
                                </div>
                            </div>
                            <div class="country-photo"><img src="images/collages/<?php echo $_smarty_tpl->tpl_vars['card']->value->getCountryImage();?>
"></div>
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

<?php }
}
