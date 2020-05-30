@extends('layouts.Order')
@section('catalogStyle')
    <style>
        .titleCatalog {
            margin-left: 499px;
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

        .downTittleCatalog {
            margin-left: 231px;
            margin-top: 32px;

            font-family: Roboto;
            font-style: normal;
            font-weight: normal;
            font-size: 36px;
            line-height: 42px;
            display: flex;
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

        .heart {
            width: 59px;
            height: 59px;
            margin-left: 11px;
            /*background-blend-mode: darken;*/
        }
    </style>
@endsection
@section('catalogcon')
    <div class="titleCatalog">Каталог</div>
    <div class="downTittleCatalog">Забронируй книгу! И забери в библиотеке!</div>
    <?php
    if (isset($_GET['search']))
        $str = $_GET['search'];
    $books_dir = __DIR__ . "/../../../public/books/";
    $books = glob($books_dir . "*");
    foreach ($books as $book) {
        $author = file_get_contents($book . "/author.txt");
        $title = file_get_contents($book . "/title.txt");
        if (isset($str)) {
            if (strpos($title, $str) === false)
                continue;
        }
        $desc = file_get_contents($book . "/desc.txt");
        $arr = explode('/', $book);
        $book_dir = end($arr);

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
                fetch("http://127.0.0.1:8000/basket.php?action=add&id=" + ev.target.id, {
                    credentials: "same-origin"
                })
                    .then(resp => resp.text())
                    .then(text => console.log(text));
            };
        }
    </script>

@endsection
