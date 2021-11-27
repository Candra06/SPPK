<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValuePenilaian extends Model
{
    protected $table = 'value_penilaian';
    protected $fillable = ['id_kriteria', 'value', 'bobot'];
}
