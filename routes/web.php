<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\CDController;

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
    return view('home');
});


Route::get('login/',function(){
    return view('login');
});

//Book Routes
Route::get('book/book-form',[BookController::class,'create'])->name('book-form');;
Route::post('book/book-form',[BookController::class,'store']);
Route::get('books/',[BookController::class,'index'])->name('books');
Route::get('/book/edit-book-form/{id}',[BookController::class,'edit']);
Route::get('book/delete/{id}',[BookController::class,'destroy']);
Route::put('/book/edit-book-form/{id}',[BookController::class,'update'])->name('update_book');


// Game Route
Route::get('game/',[GameController::class,'index'])->name('game');
Route::get('game/game-form',[GameController::class,'create'])->name('game-form');
Route::post('game/game-form',[GameController::class,'store']);
Route::get('/game/edit-game-form/{id}',[GameController::class,'edit']);
Route::get('game/delete/{id}',[GameController::class,'destroy']);


// CD FORM

Route::get('cd',[CDController::class,'index'])->name('cd');
Route::get('cd/cd-form',[CDController::class,'create'])->name('cd-form');
Route::post('cd/cd-form',[CDController::class,'store']);
Route::get('/cd/edit-cd-form/{id}',[CDController::class,'edit']);
Route::get('cd/delete/{id}',[CDController::class,'destroy']);
Route::put('/cd/edit-cd-form/{id}',[CDController::class,'update'])->name('update_cd');

//Form
Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
