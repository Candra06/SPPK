<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;
use App\Kriteria;
use App\Objek;
use App\SpecObjek;
use App\ValuePenilaian;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function dashboard()
    {
        $objek = Objek::all();
        $kriteria = Kriteria::all();
        return view('dashboard', compact('objek', 'kriteria'));
    }
    public function store(Request $request)
    {

        // return $request;
        $value = [];
        $kriteria = Kriteria::all();
        $normalisasi = [];
        $s = 0;
        foreach ($kriteria as $k) {
            $normalisasi[$s] = Helper::normalisasi($k->bobot);
            $s++;
        }
        // return $normalisasi;
        for ($i = 0; $i < count($request->objek); $i++) {

            $value[$i] = SpecObjek::leftJoin('value_penilaian', 'value_penilaian.id', 'detail_objek.id_value')
                ->leftJoin('kriteria', 'kriteria.id', 'detail_objek.id_kriteria')
                ->select('detail_objek.id_objek', 'kriteria.bobot as bobot_kriteria', 'value_penilaian.bobot')
                ->where('detail_objek.id_objek', $request->objek[$i])->get();
        }
        // return $value;
        $valueKriteria = [];
        $valNormalisasi = [];
        $bobot = [];
        for ($i = 0; $i < count($value); $i++) {
            for ($j = 0; $j < count($value); $j++) {
                $valueKriteria[$j] = $value[$i][$j]['bobot'];
                $valNormalisasi[$j] = $normalisasi[$j];
            }
            $bobot['data' . $i] = Helper::vector($request->objek[$i], $valueKriteria, $valNormalisasi);
        }
        $st = collect($bobot);
        $sorted = $st->sortBy('bobot', SORT_REGULAR, true);
        $data = [];

        foreach ($sorted as $key => $value) {
            $data[$key]['bobot'] = $value['bobot'];
            $barang = Objek::where('id', $value['id_objek'])->first();
            $data[$key]['merk'] = $barang->merk;
            $data[$key]['type'] = $barang->type;
            $data[$key]['id_objek'] = $barang->id;
        }
        // return $data;
        // dd($data);
        return view('compare.result', compact('data'));
    }
    public function compare()
    {
        $objek = Objek::all();
        return view('compare.index', compact('objek'));
    }
    public function show()
    {
        $objek = Objek::all();
        return view('compare.show', compact('objek'));
    }
    public function result()
    {
        $objek = Objek::all();
        return view('compare.result', compact('objek'));
    }
}
