<?php

namespace App\Http\Controllers;

use App\Models\CD;
use Illuminate\Http\Request;

class CDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cd=CD::all();
        return view('cd',['cds'=>$cd]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cdForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $validated = $request->validate([

            'cd_name'=>'required',
            'cd_textarea'=>'required',
            'cd_price'=>'required',
            'cd_file'=>'required',
        ]);
 
    
        if($request->hasFile('cd_file')){

            $filenameWithExt=$request->file('cd_file')->getClientOriginalName();


            //get just filename
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);

            //GET JUST EXTENSION
            $ext=$request->file('cd_file')->getClientOriginalExtension();

            $fileNameToStore=$filename ."_".time().".".$ext;

            $path=$request->file('cd_file')->storeAs('public/gfile',$fileNameToStore);

        }else{
            $fileNameToStore='noimage.jpg';
        }

        $cd = new CD();
        $cd->name=$request->input('cd_name');
        $cd->desc=$request->input('cd_textarea');
        $cd->price=$request->input('cd_price');
        $cd->images=$fileNameToStore;
        $cd->save();

        session()->flash("success","Your CD Product has been added");
        return redirect()->route('cd');

      


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CD  $cD
     * @return \Illuminate\Http\Response
     */
    public function show(CD $cD)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CD  $cD
     * @return \Illuminate\Http\Response
     */
    public function edit(CD $cD,$id)
    {
        //
        $cd=CD::find($id);
        return view('edit_cdform',['cd'=>$cd]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CD  $cD
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CD $cD,$id)
    {
        //

        $cd= CD::find($id);
        
        $validated = $request->validate([

            'cd_name'=>'required',
            'cd_textarea'=>'required',
            'cd_price'=>'required',
            'cd_file'=>'required',
        ]);

        if($request->hasFile('cd_file')){

            $filenameWithExt=$request->file('cd_file')->getClientOriginalName();


            //get just filename
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);

            //GET JUST EXTENSION
            $ext=$request->file('cd_file')->getClientOriginalExtension();

            $fileNameToStore=$filename ."_".time().".".$ext;

            $path=$request->file('cd_file')->storeAs('public/gfile',$fileNameToStore);

        }else{
            $fileNameToStore='noimage.jpg';
        }

        $cd->name=$request->input('cd_name');
        $cd->desc=$request->input('cd_textarea');
        $cd->price=$request->input('cd_price');
        $cd->images=$fileNameToStore;
        $cd->save();

        session()->flash("success-updated","Your CD Product has been updated");
        return redirect()->route('cd');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CD  $cD
     * @return \Illuminate\Http\Response
     */
    public function destroy(CD $cD,$id)
    {
        //
        CD::destroy($id);
        session()->flash('delete_success','Your CD item has been deleted');
       return redirect('cd');
    }
}
