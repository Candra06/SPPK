<?php

namespace App\Helpers;

use App\Kriteria;

class Helper
{
    public static function normalisasi($wn)
    {
        $kriteria = Kriteria::all();
        $sum = 0;
        foreach ($kriteria as $key) {
            $sum += $key->bobot;
        }
        $normalisasi = $wn / $sum;
        return floatval(number_format((float)$normalisasi, 2, '.', ''));
    }

    public static function vector($idObjek, $valueKriteria, $normalisasi)
    {

        $sum = 0;

        for ($j = 0; $j < count($valueKriteria); $j++) {
            $total = $valueKriteria[$j] ** $normalisasi[$j];
            $bobot['kriteria' . $j] = number_format((float)$total, 2, '.', '');
            $bobot['bobot' . $j] = $valueKriteria;
            $bobot['normalisasi' . $j] = $normalisasi[$j];
            $sum = $sum + $total;
        }
        $data['id_objek'] = $idObjek;
        $data['bobot'] = $sum;

        return $data;
    }
}
