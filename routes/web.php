<?php

use App\Http\Controllers\TestController;
use App\Models\Test;
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
// Route::resource('/pesanan','App\Http\Controllers\PesananController'::class);

Route::resource('/permohonan_sebutharga_dalaman','App\Http\Controllers\PermohonanSebuthargaDalamanController'::class);

Route::get('/search','App\Http\Controllers\PesananController@search');


Route::resource('/spp_pusat_khidmat_servis','App\Http\Controllers\SppPusatKhidmatServisController'::class);
Route::post('/spp_pusat_khidmat_servis/create','App\Http\Controllers\SppPusatKhidmatServisController@create'::class);
Route::post('/spp_pusat_khidmat_servis_store','App\Http\Controllers\SppPusatKhidmatServisController@store'::class);
Route::post('kategori_servis','App\Http\Controllers\SppPusatKhidmatServisController@getKodKategoriServis');
Route::get('/spp_pusat_khidmat_servis/delete/{id}','App\Http\Controllers\SppPusatKhidmatServisController@destroy');

Route::resource('/permohonan_sebutharga_luaran','App\Http\Controllers\PermohonanSebuthargaLuaranController'::class);
Route::post('pusat_perkhidmatan','App\Http\Controllers\PermohonanSebuthargaLuaranController@getPusatPerkhidmatan');
Route::post('jenis_perkhidmatan','App\Http\Controllers\PermohonanSebuthargaLuaranController@getJenisPerkhidmatan');
Route::post('pusat_perkhidmatan_servis','App\Http\Controllers\SppPusatKhidmatServisController@getPusatPerkhidmatanServis');

Route::resource('/spp_profil_harga_servis','App\Http\Controllers\SppProfilHargaServisController'::class);
Route::post('/spp_profil_harga_servis/create','App\Http\Controllers\SppProfilHargaServisController@create'::class);
Route::post('/spp_profil_harga_servis_store','App\Http\Controllers\SppProfilHargaServisController@store'::class);

Route::resource('/spp_profil_syarikat','App\Http\Controllers\SppProfilSyarikatController'::class);
Route::post('daerah','App\Http\Controllers\SppProfilSyarikatController@getDaerah');
Route::post('kod_syarikat','App\Http\Controllers\SppProfilSyarikatController@getKodKatSyarikat');
Route::get('syarikat_carian','App\Http\Controllers\SppProfilSyarikatController@getSyarikat');

Route::resource('/spp_pusat_khidmat','App\Http\Controllers\SppPusatKhidmatController'::class);
// Route::get('syarikat_carian','App\Http\Controllers\SppProfilSyarikatController@getSyarikat');
// Route::get('/spp_pusat_khidmat','App\Http\Controllers\SppPusatKhidmatController@index');

Route::resource('/kod_bank','App\Http\Controllers\KodBankController'::class);


Route::resource('/kod_status_syarikat','App\Http\Controllers\KodStatusSyarikatController'::class);


Route::resource('/kod_bayaran','App\Http\Controllers\KodBayaranController'::class);

Route::resource('/kod_negeri','App\Http\Controllers\KodNegeriController'::class);

Route::resource('/kod_daerah','App\Http\Controllers\KodDaerahController'::class);


Route::post('/idNegSel','App\Http\Controllers\KodDaerahController@getNegeri');




require __DIR__.'/auth.php';
