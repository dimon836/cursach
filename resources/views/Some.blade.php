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
@section('content')
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
            <img class="book" src='{{ url("/Photoes/HarryPotterBook.jpg") }}'>
        </div>
    </div>
</div>
</body>
@endsection

