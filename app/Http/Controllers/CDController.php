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
    public function edit(CD $cD)
    {
        //
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
    public function destroy(CD $cD)
    {
        //
    }
}
