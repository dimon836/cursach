<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/basket', function () {
    return view('basket');
});
Route::get('/catalog', function () {
    return view('catalog');
});
Route::get('/janres', function () {
    return view('janres');
});
Route::get('/', function () {
    return view('Some');
});
Route::get('/Order', function () {
    return view('Order');
});
Route::get('/add', function () {
    return view('add_book');
});
