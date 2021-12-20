<?php

namespace App\Helpers;

use App\Kriteria;

class Helper
{
    public static function normalisasi($wn, $type)
    {
        $kriteria = Kriteria::all();
        $sum = 0;
        foreach ($kriteria as $key) {
            $sum += $key->bobot;
        }
        $normalisasi = $wn / $sum;
        if ($type == "cost") {
            $normalisasi = $normalisasi * -1;
        } else {
            $normalisasi = $normalisasi;
        }
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

    public static function normalisasiVektor($vektor)
    {
        $sumVektor = 0;
        foreach ($vektor as $value) {
            $sumVektor += $value['bobot'];
        }
        $norm = [];
        $tmp = [];
        $i = 0;
        foreach ($vektor as $key => $value) {

            $tmp['id_objek'] = $value['id_objek'];
            $tmp['bobot'] = $value['bobot'];
            $hitung = $value['bobot'] / $sumVektor;
            $tmp['normalisasi'] = number_format((float)$hitung, 2, '.', '');
            $norm['data' . $i] = $tmp;
            $i++;
        }

        return $norm;
    }
}
