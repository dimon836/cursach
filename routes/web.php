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
Route::get('/main', function () {
    return view('main');
});
Route::get('/Order', function () {
    return view('Order');
});
Route::get('/Some', function () {
    return view('Some');
});
