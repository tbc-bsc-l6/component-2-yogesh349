<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\CD;
use App\Models\Game;
class ViewAllController extends Controller
{
    public function showHome(){

        $books=Book::take(3)->get();
        $cds=CD::take(3)->get();
        $games=Game::take(3)->get();
  
        return view('home',['books'=>$books,'cds'=>$cds,'games'=>$games]);

    }
    public function showProduct_Game($id){
        $book=Book::find($id);
        return view('displayproduct',['book'=>$book]);
    }

    public function showProduct_CD($id){
        $cd= CD::find($id);
        return view('displayCDp',['cd'=>$cd]);
    }

    public function search(){
        $search_product=$_GET['search'] ?? "";

        if(!$search_product=null){
            $game=Game::where('name','LIKE',"%".$search_product."%")->get();
            $cd=CD::where('name','LIKE',"%".$search_product."%")->get();
            $book=Book::where('name','LIKE',"%".$search_product."%")->get();
        }else{
            $game=Game::all();
        }
        $concatenateAll=$game->concat($cd)->concat($book);
        return view('searchproduct',['concatenateAll'=>$concatenateAll]);

        

        return view('searchproduct');
    

    }
}
