@extends('layouts.Order')
@section('catalogStyle')
    <style>
        .titleCatalog {
            margin-left: 409px;
            margin-top: 47px;

            font-family: Roboto;
            font-style: normal;
            font-seeight: bold;
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
        }

        .book.first, .book.second {
            margin-right: 150px;
        }

        .first {
            margin-left: 20px;
            margin-bottom: 20px;
        }

        .cat-img {
            width: 175px;
            height: 246px;
            margin-top: 34px;
            margin-left: 15px;

            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }

        .btn-block {
            width: 350px;
            margin-top: 39px;
            display: flex;
        }

        .cat-btn {
            float: left;
            width: 127px;
            height: 63px;

            background: #774D9F;
            border-radius: 10px;
        }

        .cat-btn h1 {
            font-family: Roboto;
            font-style: normal;
            font-weight: normal;
            font-size: 22px;
            line-height: 26px;
            /* identical to box height */
            margin-top: 15px;
            text-align: center;

            text-transform: lowercase;
            color: rgba(255, 255, 255, 0.98);
        }

        .heartIcon {
            width: 59px;
            height: 59px;
            margin-left: 18px;
            background-blend-mode: darken;
            cursor: pointer;
        }

    </style>
@endsection
@section('content')
    <div class="titleCatalog">Забронировано</div>
    @php
        $books_dir = base_path("books/");
        $books = glob($books_dir . "*");
    @endphp
    @foreach($books as $book)
        @php
            $author = file_get_contents($book . "/author.txt");
            $title = file_get_contents($book . "/title.txt");
            $desc = file_get_contents($book . "/desc.txt");
            $arr = explode('/', $book);
            $book_dir = end($arr);
        @endphp
        @if(in_array($book_dir, array_keys($_COOKIE)))
            <div class='book first'>
                <div class='catalogsbook first'>
                    <img src='{{ url("books/$book_dir/image.png") }}' alt='' class='cat-img'>
                </div>

                <div class='btn-block'>
                    <div class='cat-btn first'><h1>Описание</h1></div>
                    <img id="{{ $book_dir }}" src='{{ url("Photoes/deleteIcon.jpg") }}' class='heartIcon'/>
                </div>
            </div>
        @endif
    @endforeach
    <script>
        let hearts = document.querySelectorAll('.btn-block .heartIcon');
        for (let heartIcon of hearts) {
            heartIcon.onclick = (ev) => {
                document.cookie = ev.target.id + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                location.reload();
            };
        }
    </script>
@endsection
