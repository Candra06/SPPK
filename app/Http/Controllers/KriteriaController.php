<?php

namespace App\Http\Controllers;

use App\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function index()
    {
        $data = Kriteria::all();
        return view('kriteria.index', compact('data'));
    }

    public function create()
    {
        return view('kriteria.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'kriteria' => 'required',
            'bobot' => 'required',
        ]);

        try {
            $input['kriteria'] = $request['kriteria'];
            $input['bobot'] = $request['bobot'];
            Kriteria::create($input);
            return redirect('/kriteria')->with('status', 'Berhasil menambahkan data');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function show(Kriteria $kriterium)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function edit(Kriteria $kriterium)
    {
        // return $kriterium;
        return view('kriteria.edit', compact('kriterium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kriteria $kriterium)
    {
        $request->validate([
            'kriteria' => 'required',
            'bobot' => 'required',
        ]);

        try {
            $input['kriteria'] = $request['kriteria'];
            $input['bobot'] = $request['bobot'];
            Kriteria::where('id', $kriterium->id)->update($input);
            return redirect('/kriteria')->with('status', 'Berhasil mengubah data');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kriteria $kriterium)
    {
        try {
            Kriteria::where('id', $kriterium->id)->delete();
            return redirect('/kriteria')->with('status', 'Berhasil menghapus data');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
