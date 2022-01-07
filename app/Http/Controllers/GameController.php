<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $games=Game::paginate(5);
        return view('game',['games'=>$games]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('gameForm');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([

            'game_name'=>'required',
            'game_price'=>'required',
            'game_textarea'=>'required',
            'game_file'=>'required',
        ]);
        
        

        if($request->hasFile('game_file')){

            $filenameWithExt=$request->file('game_file')->getClientOriginalName();


            //get just filename
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);

            //GET JUST EXTENSION
            $ext=$request->file('game_file')->getClientOriginalExtension();

            $fileNameToStore=$filename ."_".time().".".$ext;

            $path=$request->file('game_file')->storeAs('public/gfile',$fileNameToStore);

        }else{
            $fileNameToStore='noimage.jpg';
        }
        $game = new Game();
        $game->name=$request->input('game_name');
        $game->desc=$request->input('game_textarea');
        $game->price=$request->input('game_price');
        $game->images=$fileNameToStore;
        $game->save();

        session()->flash("success","Your Game Product has been added");
        return redirect()->route('game');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game,$id)
    {
        $game=Game::find($id);
        return view('edit_gameform',['game'=>$game]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game,$id)
    {
        //
        Game::destroy($id);
        session()->flash('delete_success','Your game item has been deleted');
       return redirect('game');
    }
}
