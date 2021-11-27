<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecObjek extends Model
{
    protected $table = 'detail_objek';
    protected $fillable = ['id_objek', 'id_kriteria', 'id_value'];
}
