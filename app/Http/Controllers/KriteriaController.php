<?php

namespace App\Http\Controllers;

use App\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function index()
    {
        return view('kriteria.index');
    }

    public function create()
    {
        return view('kriteria.create');
    }

    
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function show(Kriteria $kriteria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function edit(Kriteria $kriteria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kriteria $kriteria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kriteria $kriteria)
    {
        //
    }
}
