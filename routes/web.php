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

Route::resource('/berita','App\Http\Controllers\BeritaController'::class);
Route::resource('/pesanan','App\Http\Controllers\PesananController'::class);
Route::resource('/spp_pusat_khidmat_servis','App\Http\Controllers\SppPusatKhidmatServisController'::class);

Route::resource('/permohonan_sebutharga_luaran','App\Http\Controllers\PermohonanSebuthargaLuaranController'::class);
Route::resource('/permohonan_sebutharga_dalaman','App\Http\Controllers\PermohonanSebuthargaDalamanController'::class);

Route::get('/search','App\Http\Controllers\PesananController@search');

Route::get('/cart', [PermohonanSebuthargaLuaranController::class, 'addToCart'])->name('permohonan_sebutharga_luaran.store');

// Route::post('pusat_perkhidmatan1','App\Http\Controllers\PermohonanSebuthargaDalamanController@getPusatPerkhidmatan1');
// Route::post('jenis_perkhidmatan1','App\Http\Controllers\PermohonanSebuthargaDalamanController@getJenisPerkhidmatan1');

Route::post('pusat_perkhidmatan','App\Http\Controllers\PermohonanSebuthargaLuaranController@getPusatPerkhidmatan');
Route::post('jenis_perkhidmatan','App\Http\Controllers\PermohonanSebuthargaLuaranController@getJenisPerkhidmatan');

// Route::post('pusat_perkhidmatan2','App\Http\Controllers\ServisPusatKhidmatController@getPusatPerkhidmatan');
// Route::post('kod_servis','App\Http\Controllers\ServisPusatKhidmatController@getKod');

Route::post('pusat_perkhidmatan_servis','App\Http\Controllers\SppPusatKhidmatServisController@getPusatPerkhidmatanServis');
Route::post('kategori_servis','App\Http\Controllers\SppPusatKhidmatServisController@getKodKategoriServis');
Route::delete('delete','App\Http\Controllers\SppPusatKhidmatServisController@destroy');

// Route::post('kod_servis_perkhidmatan','App\Http\Controllers\SppPusatKhidmatServisController@getKodServisPerkhidmatan');




require __DIR__.'/auth.php';
