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
            float: left;
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

    </style>
@endsection
@section('catalogcon')
    <div class="titleCatalog">Забронировано</div>
    <?php
//    var_dump($_COOKIE);
    $books_dir = __DIR__ . "/../../../public/books/";
    $books = glob($books_dir . "*");
    foreach ($books as $book) {
        $author = file_get_contents($book . "/author.txt");
        $title = file_get_contents($book . "/title.txt");
        $desc = file_get_contents($book . "/desc.txt");
        $arr = explode('/', $book);
        $book_dir = end($arr);
        if (!in_array($book_dir, array_keys($_COOKIE))) {
            continue;
        }

        echo "<div class='book first'>
        <div class='catalogsbook first'>
            <img src='http://127.0.0.1:8000/books/$book_dir/image.png' alt='' class='cat-img'>
        </div>

        <div class='btn-block'>
            <div class='cat-btn first'><h1>Description</h1></div>
            <img id='$book_dir' src='http://127.0.0.1:8000/Photoes/HeartIcon.png' class='heart'/>
        </div>
    </div>";
    }
    ?>
    <script>
        let hearts = document.querySelectorAll('.btn-block .heart');
        for (let heart of hearts) {
            heart.onclick = (ev) => {
                document.cookie = ev.target.id + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                location.reload();
            };
        }
    </script>
@endsection
