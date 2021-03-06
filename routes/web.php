<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HewanController;
// use App\Http\Controllers\HewanController;

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
Route::get('hewan/cetak_data', [HewanController::class, 'cetak_data']);
Route::get('dokter', 'App\Http\Controllers\DokterController@data');
Route::get('dokter/add', 'App\Http\Controllers\DokterController@add');
Route::post('dokter', 'App\Http\Controllers\DokterController@addProcess');
Route::get('dokter/edit/{id_dokter}', 'App\Http\Controllers\DokterController@edit');
Route::patch('dokter/{id_dokter}', 'App\Http\Controllers\DokterController@editProcess');
Route::delete('dokter/{id_dokter}', 'App\Http\Controllers\DokterController@delete');

Route::resource('hewan','App\Http\Controllers\HewanController');
Route::resource('jenishewan','App\Http\Controllers\JenisHewan');
Route::resource('pemilik','App\Http\Controllers\PemilikController');
Route::resource('obat','App\Http\Controllers\ObatController');
Route::resource('pelayanan','App\Http\Controllers\PelayananController');
Route::resource('transanksi','App\Http\Controllers\TransanksiController');
Auth::routes();
Route::get('/Login', [App\Http\Controllers\LoginController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
