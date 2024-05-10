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

Route::get('/', function () {
    return view('index');
});
Route::get('/Находки', function () {
    return view('found');
});
Route::get('/Потеряшки', function () {
    return view('lost');
});
Route::get('/Аккаунт', function () {
    return view('youraccount');
});
Route::get('/О нас', function () {
    return view('aboutas');
});
Route::get('/Вход', function () {
    return view('in');
});
Route::get('/Регистрация', function () {
    return view('registration');
});
