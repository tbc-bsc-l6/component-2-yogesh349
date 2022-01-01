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

            'cname'=>'required',
            'ctextarea'=>'required',
            'cprice'=>'required',
            'cfile'=>'required',
        ]);
        
        echo "Form validated";
        // ]);

        if($request->hasFile('cfile')){

            $filenameWithExt=$request->file('cfile')->getClientOriginalName();


            //get just filename
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);

            //GET JUST EXTENSION
            $ext=$request->file('cfile')->getClientOriginalExtension();

            $fileNameToStore=$filename ."_".time().".".$ext;

            $path=$request->file('cfile')->storeAs('public/gfile',$fileNameToStore);

        }else{
            $fileNameToStore='noimage.jpg';
        }

        $cd = new CD();
        $cd->name=$request->input('cname');
        $cd->desc=$request->input('ctextarea');
        $cd->price=$request->input('cprice');
        $cd->images=$fileNameToStore;
        $cd->save();

        session()->flash("success","Your Game Product has been added");
        return redirect()->route('cd-form');

      


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
    public function update(Request $request, CD $cD)
    {
        //
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
        session()->flash('delete_success','Your game item has been deleted');
       return redirect('cd');
    }
}
