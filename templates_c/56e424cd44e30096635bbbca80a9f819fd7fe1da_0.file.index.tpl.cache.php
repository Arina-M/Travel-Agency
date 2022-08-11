<?php
/* Smarty version 3.1.43, created on 2022-05-26 16:02:38
  from 'C:\OpenServer\domains\www\kursovayaOOP\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_628f7a6e5936f2_60719848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56e424cd44e30096635bbbca80a9f819fd7fe1da' => 
    array (
      0 => 'C:\\OpenServer\\domains\\www\\kursovayaOOP\\templates\\index.tpl',
      1 => 1653570069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_628f7a6e5936f2_60719848 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '841042683628f7a6e5692a5_96928725';
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--            main body-->
<div class="content-align">
    <!--            popular tours-->
    <div id="popularTours" class="popular-tours">
        <div class="header">Популярні тури</div>
        <div style="display: flex;">
            <div class="switch-button">
                <input class="switch-button-checkbox" type="checkbox">
                <label class="switch-button-label" for=""><span class="switch-button-label-span">Всі</span></label>
            </div>
        </div>
        <div class="cards">
            <div class="card">
                <div>
                    <div>
                        <img src="images/cards/card1.jpg" class="card-img">
                    </div>
                    <div class="card-info">
                        <div>
                            <div class="card-info-cat adventures">Пригоди</div>
                            <div class="card-info-days">6 Днів, 5 Ночей</div>
                        </div>
                        <div><h2>Таїланд</h2></div>
                        <div>
                            <div class="person"><span class="price">$500</span> / Людина</div>
                            <div class="buttonOrder"><button class="btn-toOrder">Переглянути</button></div>
                        </div>
                    </div>
                </div>
                <div class="card-data">
                    <div class="date">12 ЧЕРВНЯ 2022</div>
                </div>
            </div>
            <div class="card">
                <div>
                    <div>
                        <img src="images/cards/card2.jpg" class="card-img">
                    </div>
                    <div class="card-info">
                        <div>
                            <div class="card-info-cat relax">Релакс</div>
                            <div class="card-info-days">3 Дня, 2 Ночі</div>
                        </div>
                        <div><h2>Греція</h2></div>
                        <div>
                            <div class="person"><span class="price">$450</span> / Людина</div>
                            <div class="buttonOrder"><button class="btn-toOrder">Переглянути</button></div>
                        </div>
                    </div>
                </div>
                <div class="card-data">
                    <div class="date">12 ЧЕРВНЯ 2022</div>
                </div>
            </div>
            <div class="card">
                <div>
                    <div>
                        <img src="images/cards/card3.jpg" class="card-img">
                    </div>
                    <div class="card-info">
                        <div>
                            <div class="card-info-cat relax">Релакс</div>
                            <div class="card-info-days">5 Днів, 4 Ночі</div>
                        </div>
                        <div><h2>Мальдіви</h2></div>
                        <div>
                            <div class="person"><span class="price">$800</span> / Людина</div>
                            <div class="buttonOrder"><button class="btn-toOrder">Переглянути</button></div>
                        </div>
                    </div>
                </div>
                <div class="card-data">
                    <div class="date">12 ЧЕРВНЯ 2022</div>
                </div>
            </div>
        </div>
    </div>
    <!--            end popular tours-->

    <!--            about company-->
    <div id="aboutCompany" class="company">
        <div class="img-aboutComp">
            <img src="images/aboutCompany.jpg" class="ac-img">
            <div id="aboutHint-1" class="aboutHint"><span>200+</span><br>напрямкiв</div>
            <div id="aboutHint-2" class="aboutHint"><span>3000+</span><br>туристів</div>
            <div id="aboutHint-3" class="aboutHint"><span>400+</span><br>готелів</div>
        </div>
        <div class="info">
            <div class="header">Про компанію</div>
            <div class="text">
                Наша компанія створена в 2019 році. За цей проміжок
                часу ми зробили щасливими вже більше ніж 3000 наших туристів. Кожного дня до нас звертаються люди
                з проханням зробити їхні вихідні якомого начисеними
                та цікавими, тому що ми вміємо це організувати. Наша компанія має більше ніж 200 напрямків, тому відправимо вас туди, куди ви тільки захочете. А також підберемо для вас найкраще проживання, адже ми співпрацюємо
                з більше ніж 400 готелями.
                <br>
                <br>
                Хочете зробити свій відпочинок незабутнім?
                <br>
                Тоді вам до нас.
            </div>
            <!--                    <button id="contactUs">Зв'язатись</button>-->
        </div>
        <div class="chat">
            <button id="chat"><span><img src="images/jam_messages.png"></span></button>
        </div>

    </div>
    <!--            end about company-->

    <!--            reviews-->
    <div class="reviews" id="reviews">
        <div class="header vidguki-title">Відгуки</div>
        <div class="blocks">
            <div class="review-block">
                <div class="review-img">
                    <img src="images/bg-review.png" class="review-bg">
                </div>
                <div class="quotes">
                    <img src="images/quotes.png" class="img-quotes">
                </div>
                <div class="review-text">
                    Подорож в Чорногорію була найбільш
                    насиченою та цікавою в моєму житті. Ми побачили стільки красивих та неймовірних місць. Дякую вашій компанії за таких досвід.
                </div>
                <div class="user-name">
                    Маріна Іванова
                </div>
                <div class="review-avatar">
                    <div class="avatar-img">
                        <img class="avatar" src="images/avatar/cat02.jpg">
                    </div>
                    <div class="rate">
                        <div class="star">
                            <img src="images/avatar/yellow-star-with-black-background-yellow-star-clipart-1034755.png" class="star-img">
                            <span style="font-size: 10px">4.9</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="review-block">
                <div class="review-img">
                    <img src="images/bg-review.png" class="review-bg">
                </div>
                <div class="quotes">
                    <img src="images/quotes.png" class="img-quotes">
                </div>
                <div class="review-text">
                    Хочу подякувати вашій компанії за те, що організували найкращий відпочинок у моєму житті, а саме в Греції. Ці 5 днів були незабутніми. Буду
                    ще неодноразово звертатись до вас.
                </div>
                <div class="user-name">
                    Катеріна Петрова
                </div>
                <div class="review-avatar">
                    <div class="avatar-img">
                        <img class="avatar" src="images/avatar/cat03.jpg">
                    </div>
                    <div class="rate">
                        <div class="star">
                            <img src="images/avatar/yellow-star-with-black-background-yellow-star-clipart-1034755.png" class="star-img">
                            <span style="font-size: 10px">4.7</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div style="display: flex; justify-content: center">
            <button class="btn-review">Залишити свій відгук</button>
        </div>
    </div>
    <!--            end reviews-->

    <!--            contacts-->
    <div class="contacts " id="contacts">
        <div class="header">Контакти</div>
        <!--            section 1-->
        <div class="contact-content">
            <div class="ukr-number">
                <div class="num-title">Номер телефону</div>
                <div class="ukrFlag">
                    <img src="images/ua.png" class="ukrFlag-img">
                    <div class="number">+380 (67) 187 - 45 - 75</div>
                </div>
            </div>
            <!--            section 2-->
            <div class="social-media-content">
                <div class="num-title">Соціальні мережі</div>
                <div class="icons-sm">
                    <div class="sm-content">
                        <i class="bi bi-instagram" id="inst-sm"></i>
                        <div class="number">@travel.agency</div>
                    </div>
                    <div class="sm-content">
                        <!--                                <i class="bi bi-facebook" id="fb-sm"></i>-->
                        <img class="facebook" id="fb-sm" src="images/fb-icon-blue.png">
                        <div class="number">@travel.agency</div>
                    </div>

                    <div class="sm-content">
                        <!--                                <i class="bi bi-youtube" id="yt-sm"></i>-->
                        <img class="youtube" id="yt-sm" src="images/yt-icon.png">
                        <div class="number">@travel.agency</div>
                    </div>
                </div>
            </div>
            <!--            section 3-->
            <div class="email">
                <div class="num-title">E-mail</div>
                <div class="email-content">
                    <div class="number padding-num">travel.agency@gmail.com</div>
                    <div class="number padding-num">travel.agency@ukr.net</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--            end contacts-->


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
