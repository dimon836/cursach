@extends('layouts.Order')
@section('catalogStyle')
    <style>
        .titleCatalog {
            margin-top: 47px;

            font-family: Roboto, serif;
            font-style: normal;
            font-weight: bold;
            font-size: 48px;
            line-height: 56px;
            align-items: center;
            text-align: center;

            color: #000000;
        }

        .downTittleCatalog {
            margin-top: 32px;

            font-family: Roboto, serif;
            font-style: normal;
            font-weight: normal;
            font-size: 36px;
            line-height: 42px;
            align-items: center;
            text-align: center;

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
            /*margin-right: 150px;*/
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
            cursor: pointer;
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
            margin-left: 11px;
            /*background-blend-mode: darken;*/
            cursor: pointer;
        }
    </style>
@endsection
@section('content')
    <div>
        <div class="titleCatalog">Каталог</div>
        <div class="downTittleCatalog">Забронируй книгу! И забери в библиотеке!</div>
        @php
            $str = request()->get('search');
            $books_dir = base_path("books/");
            $books = glob($books_dir . "*");
        @endphp
        @foreach($books as $book)
            @php
                $author = file_get_contents($book . "/author.txt");
                $title = file_get_contents($book . "/title.txt");
                /*if (isset($str)) {
                    if (strpos($title, $str) === false)
                        continue;
                }*/
                $desc = file_get_contents($book . "/desc.txt");
                $arr = explode('/', $book);
                $book_dir = end($arr);
            @endphp
            @if(isset($str))
                @if(strpos($title, $str) !== false)
                    <div class='book first'>
                        <div class='catalogsbook first'>
                            <img src='{{ url("books/$book_dir/image.png") }}' alt='' class='cat-img'>
                        </div>
                        <div class='btn-block'>
                            <div class='cat-btn first' title=' {{ "Автор: $author\nНазвание: $title\nО книге: $desc" }}'><h1>Описание</h1></div>
                            <img id='{{ $book_dir }}' src='{{ url('Photoes/HeartIcon.png') }}' class='heartIcon' title='Добавить в хочу!'/>
                        </div>
                    </div>
                @endif
            @else
                <div class='book first'>
                    <div class='catalogsbook first'>
                        <img src='{{ url("books/$book_dir/image.png") }}' alt='' class='cat-img'>
                    </div>
                    <div class='btn-block'>
                        <div class='cat-btn first' title=' {{ "Автор: $author\nНазвание: $title\nО книге: $desc" }}'><h1>Описание</h1></div>
                        <img id='{{ $book_dir }}' src='{{ url('Photoes/HeartIcon.png') }}' class='heartIcon' title='Добавить в хочу!'/>
                    </div>
                </div>
            @endif
        @endforeach
        <script>
            let hearts = document.querySelectorAll('.btn-block .heartIcon');
            for (let heartIcon of hearts) {
                heartIcon.onclick = (ev) => {
                    fetch("/basket.php?action=add&id=" + ev.target.id, {
                        credentials: "same-origin"
                    })
                        .then(resp => resp.text())
                        .then(text => console.log(text));
                };
            }
        </script>
    </div>
@endsection
