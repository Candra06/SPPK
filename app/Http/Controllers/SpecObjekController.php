<?php

namespace App\Http\Controllers;

use App\SpecObjek;
use Illuminate\Http\Request;

class SpecObjekController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $idobjek)
    {

        try {
            $input['id_objek'] = $idobjek;
            $input['id_kriteria'] = $request->kriteria;
            $input['id_value'] = $request->valueKriteria;

            SpecObjek::create($input);
            return redirect('/objek/'.$idobjek)->with('status', 'Berhasil menambahkan data');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SpecObjek  $specObjek
     * @return \Illuminate\Http\Response
     */
    public function show(SpecObjek $specObjek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SpecObjek  $specObjek
     * @return \Illuminate\Http\Response
     */
    public function edit(SpecObjek $specObjek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SpecObjek  $specObjek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SpecObjek $specObjek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SpecObjek  $specObjek
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $idobjek)
    {
        try {
            SpecObjek::where('id', $id)->delete();
            return redirect('/objek/'.$idobjek)->with('status', 'Berhasil menghapus data');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
