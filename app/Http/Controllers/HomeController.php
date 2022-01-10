<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\CD;
use App\Models\Game;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $books=Book::take(3)->get();
        $cds=CD::take(3)->get();
        $games=Game::take(3)->get();
  
        return view('home',['books'=>$books,'cds'=>$cds,'games'=>$games]);
    }
}
