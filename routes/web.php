<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/motor','MotorController@index');
Route::get('/motor/tambah','MotorController@tambah');
Route::post('/motor/store','MotorController@store');
Route::get('/motor/edit/{id}','MotorController@edit');
Route::post('/motor/update','MotorController@update');
Route::get('/motor/hapus/{id}','MotorController@hapus');