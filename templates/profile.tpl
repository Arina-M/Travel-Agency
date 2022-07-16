{* smarty *}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
    <script>
        const pageType='{$pageType}';
        const loggedIn=parseInt({$userLoggedIn});
    </script>
</head>
<body>
<div class="blackout-bg"></div>

<div class="profile-page">
    <div class="profile-page-header">
        <div class="content-align">
            <div>
                <div>ОСОБИСТИЙ АКАУНТ</div>
                <div id="logOut">Вийти</div>
            </div>
            <div id="close-profile-x" style="cursor: pointer"><img src="images/close-white.png"></div>
        </div>
    </div>
    <div class="content-align">
        <div class="profile-data">
            <div id="profile-avatar">
                <img id="profile-avatar-img" src="images/photoUser.png">
            </div>
            <div id="profile-name">
                <div id="profile-name-surname">{$surname} {$forename}</div>
            </div>
        </div>

        <div class="profile-info">
            <div class="user-personal-info">
                <div class="user-phoneNum">
                    <div class="user-info-title"><h3>Номер телефону</h3></div>
                    <span id="user-phoneNum">{$phone}</span>
                </div>
                <div class="user-email">
                    <div class="user-info-title"><h3>E-mail</h3></div>
                    <span id="user-email">{$email}</span>
                </div>
            </div>
            <div id="profile-line"></div>
            <div class="ordered-tours">
                <div id="ordered-tours-title"><h3>Заброньовані тури</h3></div>
                <div class="ordered-tours-list">
                    {foreach $cards as $card}
                        <div class="ordered-tour-content">
                            <span class="ordered-tour" full-card-id="full_card_{$card->getId()}">{$card->getCountryName()} - {$card->getCardName()}</span>
                            <span class="cancel-tour" tour-id="{$card->getId()}">Відмінити</span>
                        </div>
                        <div class="full_card hidden" id="full_card_{$card->getId()}">
                            <div class="full_card_close_btn" full-card-id="full_card_{$card->getId()}">X</div>
                            <div class="card_name"><h3>{$card->getCardName()}</h3></div>
                            <div>
                                <div class="full-card-img"><img id="card-img" src="images/cards/{$card->getMainImage()}"></div>
                                <div class="full-card-info">
                                    <div><h4>Тривалість:</h4><span>{$card->getDaysCount()}</span></div>
                                    <div><h4>Вид:</h4><span>{$card->getType()}</span></div>
                                    <div><h4>Дата відправлення:</h4><span>{$card->getDepartureDate()}</span></div>
                                    <div><h4>Час відправлення:</h4><span>{$card->getDepartureTime()}</span></div>
                                    <div><h4>Дата прибуття:</h4><span>{$card->getReturnDate()}</span></div>
                                    <div><h4>Час прибуття:</h4><span>{$card->getReturnTime()}</span></div>
                                    <div><h4>Місто відправлення / прибуття:</h4><span>{$card->getDepartureCityName()}</span></div>
                                    <div><h4>Місце відправлення / прибуття:</h4><span>{$card->getDeparturePlaceName()}</span></div>
                                    <div><h4>Ціна:</h4><span>{$card->getFullPrice()} (людина)</span></div>
                                    <div><h4>Опис:</h4> <div id="card-description">{$card->getDescription()}</div></div>
                                    {*                            <div id="book-tour"><button id="btn-book-tour">Забронювати</button></div>*}
                                </div>
                            </div>
                        </div>

                    {/foreach}
                </div>
            </div>
        </div>
    </div>



</div>
<script src="js/user.js"></script>
</body>
</html>

