<?php

use App\Http\Controllers\belajar1Controller;
use App\Http\Controllers\belajar2Controller;
use App\Http\Controllers\belajar3Controller;
use App\Http\Controllers\kelas_controller;
use App\Http\Controllers\nomer1;
use App\Http\Controllers\nomer3;
use App\http\Controllers\SiswaController;
use App\Http\Controllers\studiController2;
use App\Http\Controllers\studiController3;
use App\Http\Controllers\studiControllerno4;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\RouterInterface;

Route::get('/', function(){
    return view('welcome');
});

Route::get('/belajar', [SiswaController::class, 'index']);

Route::get('/', function(){
    return view('welcome');
});

Route::get('/belajar1', 'belajar1Controller@index1');

Route::get('/', function(){
    return view('welcome');
});

Route::get('/belajar2', [belajar2Controller::class, 'index2']);

Route::get('/', function(){
    return view('welcome');
});

Route::get('/belajar3', [belajar3Controller::class, 'index3']);

Route::get('/', function(){
    return view('welcome');
});

Route::get('/studi', [studiController2::class, 'index']);

Route::get('/', function(){
    return view('welcome');
});

Route::get('/kelas', [kelas_controller::class, 'index']);

Route::get('/', function(){
    return view('welcome');
});

Route::get('/kelas2', [studiControllerno4::class, 'index']);

Route::get('/', function(){
    return view('welcome');
});

Route::get('/nomer1', [nomer1::class, 'index']);

Route::get('/', function(){
    return view('welcome');
});

Route::get('/nomer3', [nomer3::class, 'index']);


Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/create', [SiswaController::class, 'create']);
Route::post('/siswa', [SiswaController::class, 'store']);

Route::get('/siswa', [Kelas_Controller::class, 'index']);
Route::get('/kelas/create', [kelas_controller::class, 'create']);
Route::post('/siswa/kelas', [kelas_controller::class, 'store']);
Route::get('/siswa/edit/{id}',[Kelas_Controller::class, 'edit']); 
Route::patch('/siswa/{id}', [kelas_controller::class, 'update']);
Route::delete('/siswa/{id}', [kelas_controller::class, 'destroy']);

