<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        
        $books=Book::paginate(10);
        if($req->sort=='price_desc'){
            $books=Book::orderBy('price', 'desc')->paginate(10);
        }elseif ($req->sort=='price_asc') {
            $books=Book::orderBy('price', 'asc')->paginate(10);
 
        }elseif ($req->sort=="newest") {
            $books=Book::orderBy('created_at','desc')->paginate(10);
            
        }
        return view('books',['books'=>$books]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(Gate::denies('isBookAdmin')){
            abort(403,'Unauthorized Page Request');
        }
        return view('bookForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(Gate::denies('isBookAdmin')){
            abort(403,'Unauthorized Page Request');
        }
        $validated = $request->validate([

            'book_name'=>'required',
            'book_textarea'=>'required',
            'book_price'=>'required',
            'book_file'=>'required',
        ]);
        

        if($request->hasFile('book_file')){

            $filenameWithExt=$request->file('book_file')->getClientOriginalName();


            //get just filename
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);

            //GET JUST EXTENSION
            $ext=$request->file('book_file')->getClientOriginalExtension();

            $fileNameToStore=$filename ."_".time().".".$ext;

            $path=$request->file('book_file')->storeAs('public/gfile',$fileNameToStore);

        }else{
            $fileNameToStore='noimage.jpg';
        }
        $book = new Book();
        $book->name=$request->input('book_name');
        $book->desc=$request->input('book_textarea');
        $book->price=$request->input('book_price');
        $book->images=$fileNameToStore;
        $book->save();

        session()->flash("success","Your Shop Product has been added");
        return redirect()->route('books'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book,$id)
    {
        if(Gate::denies('isBookAdmin')){
            abort(403,'Unauthorized Page Request');
        }
        
        $book=Book::find($id);
        if(Gate::denies('isBookAdmin',$book)){
            abort(403,'Unauthorized Page Request');
        }
        return view('edit_bookForm',['book'=>$book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book,$id)
    {
        //
        if(Gate::denies('isBookAdmin')){
            abort(403,'Unauthorized Page Request');
        }
        $book=Book::find($id);

        $validated = $request->validate([

            'book_name'=>'required',
            'book_textarea'=>'required',
            'book_price'=>'required',
            'book_file'=>'required',
        ]);

        if($request->hasFile('book_file')){

            $filenameWithExt=$request->file('book_file')->getClientOriginalName();


            //get just filename
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);

            //GET JUST EXTENSION
            $ext=$request->file('book_file')->getClientOriginalExtension();

            $fileNameToStore=$filename ."_".time().".".$ext;

            $path=$request->file('book_file')->storeAs('public/gfile',$fileNameToStore);

        }else{
            $fileNameToStore='noimage.jpg';
        }
       
        if(Gate::denies('isBookAdmin',$book)){
            abort(403,'Unauthorized Page Request');
        }
        $book->name=$request->input('book_name');
        $book->desc=$request->input('book_textarea');
        $book->price=$request->input('book_price');
        $book->images=$fileNameToStore;
        $book->save();

        session()->flash("success","Your Book Product has been updated");
        return redirect()->route('books');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book,$id)
    {
        //
        if(Gate::denies('isBookAdmin')){
            abort(403,'Unauthorized Page Request');
        }
        Book::destroy($id);
        session()->flash('delete_success','Your book item has been deleted');
       return redirect()->route('books');
    }
}
