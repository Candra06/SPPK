<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});
Route::get('dashboard', 'AdminController@dashboard');
Route::get('compare', 'AdminController@compare');
Route::get('compare/show', 'AdminController@show');

Route::get('objek', 'ObjekController@index');
Route::get('objek/create', 'ObjekController@create');

Route::get('kriteria', 'KriteriaController@index');
Route::get('kriteria/create', 'KriteriaController@create');