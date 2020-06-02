<?php
if(isset($_FILES['image']['tmp_name'])) {
    $img_src = $_FILES['image']['tmp_name'];
    $dir = base_path("books/");
    $count_books = 0;
    $books = glob($dir . "*");
    if ($books) $count_books = count($books);
    $count_books++;
    $book_dir = $dir . "book$count_books";
    mkdir($book_dir);
    file_put_contents($book_dir . "/title.txt", $_POST['title']);
    file_put_contents($book_dir . "/desc.txt", $_POST['desc']);
    file_put_contents($book_dir . "/author.txt", $_POST['author']);
    copy($img_src, $book_dir . "/image.png");
    echo "Added book";
};
?>

