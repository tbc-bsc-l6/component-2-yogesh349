<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;
use App\Http\Controllers\GameController;

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

Route::get('shop',[ShopController::class,'show']);


Route::get('books/',function(){
    return view('books');
});

Route::get('cd/',function(){
    return view('cd');
});

Route::get('login/',function(){
    return view('login');
});
//Book Routes

Route::get('book/book-form',[BookController::class,'create']);


// Game Route

Route::get('game/',[GameController::class,'index'])->name('game');
Route::get('game/game-form',[GameController::class,'create'])->name('game-form');
Route::post('game/game-form',[GameController::class,'store']);
Route::get('/game/edit-game-form/{id}',[GameController::class,'edit']);
Route::get('game/delete/{id}',[GameController::class,'destroy']);

//Form

Route::get('signupform/',function(){
    return view('signup');
});




