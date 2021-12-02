<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objek extends Model
{
    protected $table = 'object';
    protected $fillable = ['merk', 'gambar','type', 'status'];

    public function spec()
    {
        return $this->hasMany('App\SpecObjek', 'id_objek', 'id');
    }
}
