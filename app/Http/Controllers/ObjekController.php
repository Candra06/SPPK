<?php

namespace App\Http\Controllers;

use App\Kriteria;
use App\Objek;
use App\SpecObjek;
use App\ValuePenilaian;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
class ObjekController extends Controller
{
    public function index()
    {
        $data = Objek::all();
        return view('object.index', compact('data'));
    }

    public function create()
    {
        $kriteria = Kriteria::all();

        return view('object.create', compact('kriteria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'merk' => 'required',
            'gambar' => 'file|between:0,2048|mimes:png,jpg,jpeg',
            'type' => 'required',
        ]);

        try {
            $fileType = $request->file('gambar')->extension();
            $name = Str::random(8) . '.' . $fileType;
            $input['merk'] = $request['merk'];
            $input['type'] = $request['type'];
            $input['status'] = 'Active';
            $input['gambar'] = Storage::putFileAs('gambar', $request->file('gambar'), $name);
            Objek::create($input);
            return redirect('/objek')->with('status', 'Berhasil menambahkan data');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Objek  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function show(Objek $objek)
    {
        $spek = SpecObjek::leftJoin('kriteria', 'kriteria.id', 'detail_objek.id_kriteria')
            ->leftJoin('value_penilaian', 'value_penilaian.id', 'detail_objek.id_value')
            ->select('kriteria.kriteria', 'value_penilaian.value', 'detail_objek.id')
            ->where('detail_objek.id_objek', $objek->id)->get();
        $kriteria = Kriteria::all();
        return view('object.detail', compact('objek', 'spek', 'kriteria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Objek  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function edit(Objek $objek)
    {
        // return $objek;
        return view('object.edit', compact('objek'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Objek  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Objek $objek)
    {
        $request->validate([
            'merk' => 'required',
            'type' => 'required',
            'status' => 'required',
        ]);

        try {
            if ($request->gambar) {
                $fileType = $request->file('gambar')->extension();
                $name = Str::random(8) . '.' . $fileType;
                $input['gambar'] = Storage::putFileAs('gambar', $request->file('gambar'), $name);
            }

            $input['merk'] = $request['merk'];
            $input['type'] = $request['type'];
            $input['status'] = $request['status'];

            Objek::where('id', $objek->id)->update($input);
            return redirect('/objek')->with('status', 'Berhasil menambahkan data');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Objek  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Objek $objek)
    {
        try {
            Objek::where('id', $objek->id)->delete();
            return redirect('/objek')->with('status', 'Berhasil menghapus data');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
