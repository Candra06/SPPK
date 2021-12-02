<?php

namespace App\Http\Controllers;

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
    public function compare()
    {
        return view('compare.index');
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
