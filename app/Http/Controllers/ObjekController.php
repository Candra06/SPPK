<?php

namespace App\Http\Controllers;

use App\Objek;
use Illuminate\Http\Request;

class ObjekController extends Controller
{
    public function index()
    {
        return view('object.index');
    }

    public function create()
    {
        //
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
     * @param  \App\Objek  $objek
     * @return \Illuminate\Http\Response
     */
    public function show(Objek $objek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Objek  $objek
     * @return \Illuminate\Http\Response
     */
    public function edit(Objek $objek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Objek  $objek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Objek $objek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Objek  $objek
     * @return \Illuminate\Http\Response
     */
    public function destroy(Objek $objek)
    {
        //
    }
}
