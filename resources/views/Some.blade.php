@extends('layouts.Order')
@section('catalogStyle')
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
        .heart:hover {
            color: red;
            transition: 0.1s;
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
        .exclusive {
            margin: 50px;
            align-items: center;
            display: flex;
        }
        .leftExclusive {
            height: 240px;
            width: 260px;
            background-color: #FE9D3B;
            text-align: center;
            color: white;
            border-bottom-left-radius: 8px;
            border-top-left-radius: 8px;
        }
        .rightExclusive {
            height: 240px;
            width: 460px;
            background-color: #744e9f;
            text-align: center;
            align-items: center;
            color: white;
            border-bottom-right-radius: 8px;
            border-top-right-radius: 8px;
            display: flex;
        }
        .leftExclusiveText {
            margin: 20px;
        }
        .first_last_text {
            margin-top: 20px;
            margin-bottom: 20px;
            font-size: 12px;
        }
        .middleText {
            font-size: 18px;
            margin-bottom: 30px;
        }
        .book {
            margin-left: 20px;
            height: 200px;
        }
        .rightExclusiveTextDown {
            font-family: cursive;
            margin: 50px;
        }
        .rightExclusiveTextUp {
            font-family: cursive;
            margin: 50px;
        }
    </style>
@endsection
@section('maincon')
<body>
<div class="col-10 upper">
    <div class="exclusive">
        <div class="leftExclusive">
            <div class="leftExclusiveText">
                <p class="first_last_text">Самая читаемая книга за всё время:</p>
                <p class="middleText">31617 бронирований за всё время</p>
                <p class="first_last_text">Количество свободных книг в данное время: 3</p>
            </div>
        </div>
        <div class="rightExclusive">
            <div>
                <p class="rightExclusiveTextUp">
                    Лучшее у нас!
                </p>
                <p class="rightExclusiveTextDown">
                    Гарри Поттер и дары <br>смерти
                </p>
            </div>
            <img class="book" src="/Photoes/HarryPotterBook.jpg">
        </div>
    </div>
</div>
</body>
@endsection

