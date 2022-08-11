<?php
/* Smarty version 3.1.43, created on 2022-05-26 16:06:55
  from 'C:\OpenServer\domains\www\kursovayaOOP\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_628f7b6fb23ed5_40811997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56e424cd44e30096635bbbca80a9f819fd7fe1da' => 
    array (
      0 => 'C:\\OpenServer\\domains\\www\\kursovayaOOP\\templates\\index.tpl',
      1 => 1653570069,
      2 => 'file',
    ),
    '96e944ce8b68985462896e81b43fa84aee51c5c3' => 
    array (
      0 => 'C:\\OpenServer\\domains\\www\\kursovayaOOP\\templates\\header.tpl',
      1 => 1653570412,
      2 => 'file',
    ),
    'e6c7b975c872de023fea89f4cc3c8e7540f66fa0' => 
    array (
      0 => 'C:\\OpenServer\\domains\\www\\kursovayaOOP\\templates\\footer.tpl',
      1 => 1653570038,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_628f7b6fb23ed5_40811997 (Smarty_Internal_Template $_smarty_tpl) {
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
	<div class="bg-img5"></div>
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
        </div>
    </div>
</div>
<!--            end footer-->

<!--            end main body-->

<script src="js/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>
</html>



<?php }
}
