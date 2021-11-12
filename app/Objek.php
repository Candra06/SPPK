<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objek extends Model
{
    protected $table = 'object';
    protected $fillable = ['merk', 'type', 'status'];
}
