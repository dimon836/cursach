<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width">
    <title>MyShop</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .header {
            display: flex;
            width: 100%;
            margin: 0;
            padding: 0;
        }
        .main_picture {
            display: flex;
            justify-content: space-between;
            margin-right: 30px;
            margin-bottom: 70px;
        }
        .upperRight1{
            background-color: #30C665;
            color: white;
            height: 36px;
            text-align: center;
            padding-top: 4px;
        }
        .upperRight2 {
            background-color: #ffffff;
            color: #744E9F;
            height: 36px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            text-align: center;
            margin-top: 5px;
            margin-left: 1%;
            justify-content: space-between;
        }
        p {
            margin: 0;
        }
        .user {
            display: flex;
            margin-right: 40px;
        }
        .upperRight3 {
            background-color: #FE9D3B;
            height: 112px;
            display: flex;
            text-align: center;
            align-items: center;
            justify-content: space-between;
        }
        .button {
            background-color: #008000;
            border-radius: 5px;
            border: 0;
            height: 26px;
            width: 100px;
            color: white;
        }
        .phoneCall {

        }
        .phoneImage {
            align-items: center;
        }
        .phoneNumber {
            cursor: pointer;
        }
        .phoneNumber:hover {
            color: red;
            transition: 0.1s;

        }
        .arrowToDown {
            width: 10px;
            height: 10px;
            cursor: pointer;
        }
        .someText {
            margin-left: -500px;
        }
        .katalog {
            display: flex;
            border: 1px solid black;
            border-radius: 10px;
            color: white;
            padding: 10px;
            text-align: center;
            align-items: center;
            margin-left: 44px;
        }
        .heart {
            height: 80px;
            margin-right: 80px;
            cursor: pointer;
        }
        .rectangles {
            margin-right: 5px;
            height: 14px;
        }
        .inputPanel {
            border-radius: 5px;
            height: 38px;
            width: 400px;
        }
        label {
            margin-bottom: 0;
        }
        .btn-success {
            margin-bottom: 5px;
            margin-left: -20px;
        }
        .upper {
            border-left: 1px solid orange;
            padding: 0;
        }
        .col-10 {
            border-left: 1px solid orange;
        }
        .opacity {
            margin-left: 2px;
            opacity: 0.5;
            font-size: 14px;
        }
        .blueText {
            color: blue;
            text-decoration: underline;
            margin-left: 4px;
            cursor: pointer;
        }
        .blueText:hover {
            color: #5151ff;
        }
        .darkText {
            margin-left: 4px;
        }
        .socialNetworks {
            display: flex;
            align-items: center;
            text-align: center;
            justify-content: space-between;
        }
        .socialNetwork {
            height: 24px;
            cursor: pointer;
        }
        .socNet {
            height: 50px;
            width: 210px;
            /*padding: 14px;*/
            margin-bottom: 15px;
        }
        .socNetText {
            margin-top: 10px;
        }
        .footer {
            width: 100%;
            display: flex;
        }
        .copyrightClass {
            background-color: #FE9D3B;
            text-align: right;
            align-items: center;
        }
        .copyrightText {
            margin-top: 30px;
        }
        .lastInfo {
            margin-bottom: 30px;
        }
        .header_user_dropdown {
            font-size: 17px;
        }
        .header_dropdown {
            background-color: white !important;
            top: 0 !important;
        }
    </style>
    @yield('catalogStyle')

</head>

<body>
<div class="header">
    <div class="col-2">
        <a href="/">
            <img src='{{ url("/Photoes/mainPicture.jpg") }}'
                 class="main_picture"
                 height=135px
                 width=220px
                 alt="Book Shop Be Smart"/>
        </a>
        <div>
            <div>
                <p class="opacity">Информация</p>
                <p class="blueText">О нас<br></p>
                <p class="blueText">Контакты<br></p>
            </div>
            <div>
                <br>
                <p class="opacity">График работы</p>
                <p class="darkText">В будние</p>
                <p class="darkText">с 8:00 до 21:00</p>
                <p class="darkText">Суббота</p>
                <p class="darkText">с 9:00 до 20:00</p>
                <p class="darkText">Воскресенье</p>
                <p class="darkText">с 10:00 до 19:00</p>
            </div>
            <div class="lastInfo">
                <br>
                <p class="opacity">Наши библиотеки в Киеве</p>
                <p class="blueText">пр. Победы 1</p>
                <p class="blueText">ул. Академика-Янгеля 5</p>
            </div>

        </div>
    </div>
    <div class="col-10 upper">
        <div class="upperRight1">
            Мы работаем в безопасном режиме в связи с вирусом который бушует в данное время.
            <button class="button" type="button"> Подробнее</button>
        </div>

        <div class="upperRight2">
            <div class="phoneCall">
                <img class="phoneImage" src='{{ url("/Photoes/phone icon.jpg") }}' height="24"/>
                <u class="phoneNumber">(068) 42 81 983</u>
                <img class="arrowToDown" src='{{ url("/open-iconic-master/svg/chevron-bottom.svg") }}'>
            </div>
            <p class="someText"> Другие способы связи </p>
            <div class="user">
                <img class="phoneImage" src='{{ url("/open-iconic-master/svg/person.svg") }}' height=24>
                <!--<a class="phoneNumber" href="{{ route('login') }}">Войти в личный кабинет</a>-->
                <div class="d-flex align-items-center">
                    @guest
                        <div style="margin-right: 15px">
                            <a class="button_main font_17" id="login" href="{{ route('login') }}">Логін</a>
                        </div>
                        <div>
                            <a class="button_main font_17" id="register" href="{{ route('register') }}">Реєстрація</a>
                        </div>
                    @else
                        <a id="navbarDropdown" class="nav-link dropdown-toggle header_user_dropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right header_dropdown" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('home') }}">
                                Мій профіль
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                Вийти з аккаунту
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    @endguest
                </div>

            </div>
        </div>

        <div class="upperRight3">
            <a href="/catalog">
                <div class="katalog">
                    <img src='{{ url("/open-iconic-master/svg/grid-two-up.svg") }}' class="rectangles">
                    <p>Каталог</p>
                </div>
            </a>
            <form action="{{ route('catalog') }}" method="get">
                <div class="d-flex">
                    <label>
                        <input name="search" class="inputPanel" @if(request()->get('search')) value="{{ request()->get('search') }}" @endif>
                    </label>
                    <button type="submit" class="btn btn-success ml-1">Поиск</button>
                </div>
            </form>
            <a href="/basket">
                <img src="{{ url('/open-iconic-master/svg/heart-outline.svg') }}" title="Список желаний" class="heart">
            </a>
        </div>
        @yield('content')
    </div>
</div>

<div class="footer">
    <div class="socNet col-2">
        <div class="socNetText">
            <p>Мы в социальных сетях</p>
        </div>
        <div class="socialNetworks">
            <a href="https://www.instagram.com/dima.izvestniy/" target="_blank">
                <img class="socialNetwork" src='{{ url("/open-iconic-master/svg/instagram.svg") }}'>
            </a>
            <a href="t.me/Dimon836" target="_blank">
                <img class="socialNetwork" src='{{ url("/open-iconic-master/svg/telegram.svg") }}'>
            </a>
            <a href="" target="_blank">
                <img class="socialNetwork" src='{{ url("/open-iconic-master/svg/viber.svg") }}'>
            </a>
            <a href="https://www.youtube.com/channel/UC2Rt3uEPfbpfTEtitjz8-1Q?view_as=subscriber" target="_blank">
                <img class="socialNetwork" src='{{ url("/open-iconic-master/svg/youtube.svg") }}'>
            </a>
            <a href="" target="_blank">
                <img class="socialNetwork" src='{{ url("/open-iconic-master/svg/facebook.svg") }}'>
            </a>
        </div>
    </div>
    <div class="copyrightClass col-10">
        <p class="copyrightText">
            Copyright © 2020 Все права защищены.
        </p>
    </div>
</div>
</body>
</html>
