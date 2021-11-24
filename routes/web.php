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
    return view('home');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/base', function () {
    return view('base');
});
Route::get('/bases', function () {
    return view('bases');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard1', function () {
    return view('dashboard1');
});

Route::resource('/permohonan_sebutharga_luaran','App\Http\Controllers\PermohonanSebuthargaLuaranController'::class);

Route::post('pusat_perkhidmatan','App\Http\Controllers\PermohonanSebuthargaLuaranController@getPusatPerkhidmatan');
Route::post('jenis_perkhidmatan','App\Http\Controllers\PermohonanSebuthargaLuaranController@getJenisPerkhidmatan');

Route::resource('/permohonan_sebutharga_dalaman','App\Http\Controllers\PermohonanSebuthargaDalamanController'::class);

Route::post('pusat_perkhidmatan','App\Http\Controllers\PermohonanSebuthargaDalamanController@getPusatPerkhidmatan1');
Route::post('jenis_perkhidmatan','App\Http\Controllers\PermohonanSebuthargaDalamanController@getJenisPerkhidmatan1');



require __DIR__.'/auth.php';
