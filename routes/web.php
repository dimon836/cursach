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
})->name('basket');

Route::get('/catalog', function () {
    return view('catalog');
})->name('catalog');

Route::get('/', function () {
    return view('Some');
})->name('Some');

Route::get('/mini', function () {
    return view('MiniOrder');
})->name('MiniOrder');

Route::get('/add', function () {
    return view('add_book');
})->name('add');

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
