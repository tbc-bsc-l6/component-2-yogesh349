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

    public function search(Request $req){
        $search_product=$_GET['search'] ?? "";

        if(!$search_product=null){
            $game=Game::where('name','LIKE',"%".$search_product."%")->get();
            $cd=CD::where('name','LIKE',"%".$search_product."%")->get();
            $book=Book::where('name','LIKE',"%".$search_product."%")->get();
            if( $req->sort=='price_desc'){
                $game=Game::orderBy('price', 'desc');
                $cd=Game::orderBy('price', 'desc');
                $book=Game::orderBy('price', 'desc');
            }elseif ($req->sort   =='price_asc') {
                $game=Game::orderBy('price', 'asc');
                $cd=Game::orderBy('price', 'asc');
                $book=Game::orderBy('price', 'asc');
            }elseif ($req->sort=="newest") {
                $game=Game::orderBy('created_at','desc');
                $cd=Game::orderBy('created_at','desc');
                $book=Game::orderBy('created_at','desc');
                
            }
            
        }else{
            $game=Game::all();
        }

        $concatenateAll=$game->concat($cd)->concat($book);
        return view('searchproduct',['concatenateAll'=>$concatenateAll]);

        

        return view('searchproduct');
    

    }
}
