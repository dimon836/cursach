@extends('layouts.Order')

@section('content')
    <div style="margin: 100px;" content=""></div>
    <form enctype="multipart/form-data" method="post" id="post_book" action="add_book.php">
        <label for="title">Title</label>
        <input name="title" id="title" type="text">

        <label for="author">Author</label>
        <input name="author" id="author" type="text">

        <label for="desc">Description</label>
        <input name="desc" id="desc" type="text">

        <label for="image">Image</label>
        <input id="image" name="image" type="file">

        <input type="submit" value="Add book">
    </form>
@endsection
