<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('objek', 'ObjekController@index');
Route::get('kriteria', 'KriteriaController@index');
Route::get('kriteria/create', 'KriteriaController@create');