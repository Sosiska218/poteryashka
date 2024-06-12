<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('index');
})->name('Main');
Route::get('/nahodki', function () {
    return view('found');
})->name('found');
Route::get('/poteryashki', function () {
    return view('lost');
})->name('lost');
Route::get('/o_nas', function () {
    return view('aboutas');
})->name('aboutas');
//Route::get('/registration', function () {
//    return view('registration');
//})->name('registration');

Route::get('/foundcreate', function () {
    return view('foundcreate');
})->name('foundcreateform');

Route::get('/lostcreate',function (){
    return "lostcreate";
})->name('lostcreateform');

Route::get('/welcome', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/found/submit','App\Http\Controllers\FoundController@submit')->name('foundcreate');

Route::post('/lost/submit',function (){
    return "lost";
})->name('lostcreate');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
