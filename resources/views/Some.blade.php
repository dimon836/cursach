@extends('layouts.Order')
@section('catalogStyle')
<style>
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
    .first_text {
        margin-top: 20px;
        margin-bottom: 20px;
        font-size: 12px;
    }
    .middleText {
        font-size: 18px;
        margin-bottom: 30px;
    }
    .last_text {
        margin-top: 20px;
        margin-bottom: 20px;
        font-size: 12px;
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
    .wrapper {
        max-width:1200px;
    }
    @media (max-width: 580px) {
        .last_text {
            display: none;
        }
    }
    @media (max-width: 530px) {
        .leftExclusive {
            height: 120px;
            width: 130px;
        }
        .rightExclusive {
            height: 120px;
            width: 230px;

        }
        .book {
            margin-left: 10px;
            height: 100px;
        }
        .exclusive {
            margin-left: 20px;
        }
        .rightExclusiveTextUp {
            font-size: 12px;
            margin: 20px;
        }
        .rightExclusiveTextDown {
            font-size: 12px;
            margin: 20px;
        }
        .leftExclusiveText {
            margin: 10px;
        }
        .first_text {
            margin-top: 8px;
            margin-bottom: 8px;
            font-size: 10px;
        }
        .middleText {
            font-size: 12px;
            margin-bottom: 15px;
        }
    }
    @media (max-width: 360px) {
        .exclusive {
            margin-left: 14px;
        }
        .rightExclusiveTextUp {
            font-size: 10px;
            margin: 15px;
        }
        .rightExclusiveTextDown {
            font-size: 10px;
            margin: 15px;
        }
        .leftExclusiveText {
            margin: 10px;
        }
        .first_text {
            margin-top: 6px;
            margin-bottom: 6px;
            font-size: 10px;
        }
        .middleText {
            font-size: 12px;
            margin-bottom: 12px;
        }
    }

</style>
@endsection
@section('content')
<body class="zeroBody">
<div class="upper">
    <div class="exclusive wrapper">
        <div class="leftExclusive">
            <div class="leftExclusiveText">
                <p class="first_text">Самая читаемая книга:</p>
                <p class="middleText">31617 бронирований за всё время</p>
                <p class="last_text">Количество свободных книг в данное время: 3</p>
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
            <img class="book" src='{{ url("/Photoes/HarryPotterBook.jpg") }}'>
        </div>
    </div>
</div>
</body>
@endsection
@section('miniContent')
<body>
<div class="mobileBody">
    <div class="upper">
        <div class="exclusive wrapper">
            <div class="leftExclusive">
                <div class="leftExclusiveText">
                    <p class="first_text">Самая читаемая книга:</p>
                    <p class="middleText">31617 бронирований за всё время</p>
                    <p class="last_text">Количество свободных книг в данное время: 3</p>
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
                <img class="book" src='{{ url("/Photoes/HarryPotterBook.jpg") }}'>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
