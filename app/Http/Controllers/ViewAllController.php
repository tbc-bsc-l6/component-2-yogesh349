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
        $concatenateAll=$games->concat($cds)->concat($books);
        $concatenateAll->all();
        return view('home',['concatenateAll'=>$concatenateAll]);

    }


    public function AllProducts(){
        $books=Book::all();
        $cds=CD::all();
        $games=Game::all();

        $concatenateAll=$games->concat($cds)->concat($books)->paginate(10);
        $concatenateAll->all();
        
        return view('allproduct',['concatenateAll'=>$concatenateAll]);
        
        
    }
    
    


    public function search(Request $req){
        $name=$_GET['search'];
        

        if(isset($name)){
            $game=Game::where('name', 'LIKE', "%$name%")->get();
            $cd=CD::where('name','LIKE',"%$name%")->get();
            $book=Book::where('name','LIKE',"%$name%")->get();

            $concatenateAll=$game->concat($cd)->concat($book)->paginate(10);
            $concatenateAll->all();
           
            return view('searchproduct',['concatenateAll'=>$concatenateAll]);
        }
        


        abort(402,'Enter some value in search Field');



        

      
    }
}
