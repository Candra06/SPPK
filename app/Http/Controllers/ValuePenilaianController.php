<?php

namespace App\Http\Controllers;

use App\Kriteria;
use App\ValuePenilaian;
use Illuminate\Http\Request;

class ValuePenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ValuePenilaian::leftJoin('kriteria', 'kriteria.id', 'value_penilaian.id_kriteria')->select('kriteria.kriteria', 'value_penilaian.*')->orderBy('id_kriteria', 'asc')->get();
        return view('valuePenilaian.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data= Kriteria::orderBy('kriteria')->get();
        return view('valuePenilaian.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $input['id_kriteria'] = $request->kriteria;
            $input['value'] = $request->value;
            $input['bobot'] = $request->bobot;

            ValuePenilaian::create($input);
            return redirect('/value')->with('status', 'Berhasil menambahkan data');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ValuePenilaian  $value
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $kecamatan = ValuePenilaian::where("id_kriteria",$request->kriteria)->pluck('id','value');
        return response()->json($kecamatan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ValuePenilaian  $value
     * @return \Illuminate\Http\Response
     */
    public function edit(ValuePenilaian $value)
    {
        $data= Kriteria::all();
        return view('valuePenilaian.edit', compact('value', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ValuePenilaian  $value
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ValuePenilaian $value)
    {
        try {
            $input['id_kriteria'] = $request->kriteria;
            $input['value'] = $request->value;
            $input['bobot'] = $request->bobot;

            ValuePenilaian::where('id', $value->id)->update($input);
            return redirect('/value')->with('status', 'Berhasil mengubah data');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ValuePenilaian  $value
     * @return \Illuminate\Http\Response
     */
    public function destroy(ValuePenilaian $value)
    {
        try {
            ValuePenilaian::where('id', $value->id)->delete();
            return redirect('/value')->with('status', 'Berhasil menghapus data');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
