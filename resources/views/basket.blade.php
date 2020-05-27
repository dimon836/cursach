@extends('layouts.Order')
@section('catalogStyle')
    <style>
        .titleCatalog {
            margin-left: 409px;
            margin-top: 47px;

            font-family: Roboto;
            font-style: normal;
            font-weight: bold;
            font-size: 48px;
            line-height: 56px;
            display: flex;
            align-items: center;

            color: #000000;
        }

        .cat-books.first {
            margin-top: 34px;
        }
        .cat-books.second {
            margin-top: 583px;
        }
         .cat-books.first, .cat-books.second {
            margin-left: 68px;
        }
         .book {
             float: left;
         }

        .catalogsbook {
            width: 210px;
            height: 344px;
            margin-top: 34px;

            background: #FFFFFF;
            border: 3px solid rgba(0, 0, 0, 0.09);
            box-sizing: border-box;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            filter: blur(4px);
        }

        .book.first, .book.second {
            margin-right: 150px;
        }
        .cat-img {
            width: 175px;
            height: 246px;
            margin-top: 34px;
            margin-left: 15px;

            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }

        .btn-block {
            width: 210px;
            margin-top: 39px;
        }

        .cat-btn {
            float:left;
            width: 127px;
            height: 63px;

            background: #774D9F;
            border-radius: 10px;
        }
        .heart {
            width: 59px;
            height: 52px;
            margin-left: 151px;
            background: url('/public/Photoes/HeartIcon.png');
            background-blend-mode: darken;
        }
        .footer {
            margin-top: 400px !important;
        }
    </style>
@endsection
@section('catalogcon')
    <div class="titleCatalog">Забронировано</div>
    <div class="cat-books first">
        <div class="book first">
            <div class="catalogsbook first">
                <img src="/Photoes/image 1.png" alt="" class="cat-img">
            </div>

            <div class="btn-block">
                <div class="cat-btn first"></div>
                <div class="heart"></div>
            </div>
        </div>
        <div class="book second">
            <div class="catalogsbook second">
                <img src="/Photoes/image 2.png" alt="" class="cat-img">
            </div>
            <div class="btn-block">
                <div class="cat-btn second"></div>
                <div class="heart"></div>
            </div>
        </div>
        <div class="book">
            <div class="catalogsbook third">
                <img src="/Photoes/image 3.png" alt="" class="cat-img">
            </div>
            <div class="btn-block">
                <div class="cat-btn"></div>
                <div class="heart"></div>
            </div>
        </div>
    </div>
    <div class="cat-books second">
        <div class="book first">

        <div class="catalogsbook fourth">
            <img src="/Photoes/image 4.png" alt="" class="cat-img"></div>
            <div class="btn-block">
                <div class="cat-btn first"></div>
                <div class="heart"></div>
            </div>
        </div>
        <div class="book second">
        <div class="catalogsbook fifts"><img src="/Photoes/image 5.png" alt="" class="cat-img"></div>
            <div class="btn-block">
                <div class="cat-btn second"></div>
                <div class="heart"></div>
            </div>
        </div>
        <div class="book">
            <div class="catalogsbook sexs"><img src="/Photoes/image 6.png" alt="" class="cat-img"></div>
            <div class="btn-block">
                <div class="cat-btn"></div>
                <div class="heart"></div>
            </div>
        </div>
    </div>
@endsection
