@extends('layouts.Order')

@section('maincon')
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
@endsection
