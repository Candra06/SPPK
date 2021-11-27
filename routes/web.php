<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {return view('dashboard');});
Route::get('login', function () {return view('auth.login');});
Route::get('register', function () {return view('auth.register');});


Route::get('dashboard', 'AdminController@dashboard');
Route::get('compare', 'AdminController@compare');
Route::get('compare/show', 'AdminController@show');

Route::resource('kriteria', 'KriteriaController');
Route::resource('objek', 'ObjekController');
Route::resource('value', 'ValuePenilaianController');
Route::get('/getValue', 'ValuePenilaianController@show');
Route::post('spek/{idobjek}', 'SpecObjekController@store');
Route::delete('spek/{id}/{idobjek}', 'SpecObjekController@destroy');
