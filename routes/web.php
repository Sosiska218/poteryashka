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
    $founds = \App\Models\Found::query()->latest()->get();
    return view('found', compact(['founds']));
})->name('found');
Route::get('/poteryashki', function () {
    $losts = \App\Models\Lost::query()->latest()->get();
    return view('lost', compact(['losts']));
})->name('lost');
Route::get('/o_nas', function () {
    return view('aboutas');
})->name('aboutas');

Route::get('/foundcreate', function () {
    return view('foundcreate');
})->name('foundcreateform')->middleware('auth');

Route::get('/lostcreate',function (){
    return view('lostcreate');
})->name('lostcreateform')->middleware('auth');

Route::post('/found/submit',[\App\Http\Controllers\FoundController::class, 'submit'])->middleware('auth')->name('foundcreate');

Route::post('/lost/submit', [\App\Http\Controllers\LostController::class, 'submit'])->name('lostcreate')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
