<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ShopController;

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

Route::get('game/',function(){
    return view('game');
});
Route::get('books/',function(){
    return view('books');
});

Route::get('cd/',function(){
    return view('cd');
});

Route::get('login/',function(){
    return view('login');
});


