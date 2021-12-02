<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecObjek extends Model
{
    protected $table = 'detail_objek';
    protected $fillable = ['id_objek', 'id_kriteria', 'id_value'];

    public function objek()
    {
        return $this->belongsTo('App\Objek', 'id_objek', 'id');
    }

    public function kriteria()
    {
        return $this->belongsTo('App\Kriteria', 'id_kriteria', 'id');
    }

    public function value()
    {
        return $this->belongsTo('App\ValuePenilaian', 'id_value', 'id');
    }
}
