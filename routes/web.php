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
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('bases');
});
// ->middleware(['auth'])->name('dashboard');

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
// Route::post('/spp_profil_harga_servis/create','App\Http\Controllers\SppProfilHargaServisController@create'::class);
// Route::post('/spp_profil_harga_servis_store','App\Http\Controllers\SppProfilHargaServisController@store'::class);

Route::resource('/spp_profil_syarikat','App\Http\Controllers\SppProfilSyarikatController'::class);
Route::post('daerah','App\Http\Controllers\SppProfilSyarikatController@getDaerah');
Route::post('kod_syarikat','App\Http\Controllers\SppProfilSyarikatController@getKodKatSyarikat');
Route::post('carian_syarikat','App\Http\Controllers\SppProfilSyarikatController@getSyarikat');

Route::resource('/spp_pusat_khidmat','App\Http\Controllers\SppPusatKhidmatController'::class);
// Route::get('syarikat_carian','App\Http\Controllers\SppProfilSyarikatController@getSyarikat');
// Route::get('/spp_pusat_khidmat','App\Http\Controllers\SppPusatKhidmatController@index');

Route::resource('/kod_bank','App\Http\Controllers\KodBankController'::class);


Route::resource('/kod_status_syarikat','App\Http\Controllers\KodStatusSyarikatController'::class);


Route::resource('/kod_bayaran','App\Http\Controllers\KodBayaranController'::class);

Route::resource('/kod_negeri','App\Http\Controllers\KodNegeriController'::class);

Route::resource('/kod_kategori_servis','App\Http\Controllers\KodKategoriServisController'::class);
Route::post('/kategori_proses_template','App\Http\Controllers\KodKategoriServisController@getProsesTemplate'::class);
Route::get('/detail_proses','App\Http\Controllers\KodKategoriServisController@getDetailProses'::class);

Route::resource('/kod_daerah','App\Http\Controllers\KodDaerahController'::class);
Route::post('/idNegSel','App\Http\Controllers\KodDaerahController@getNegeri');
Route::delete('kod_daerah_DeleteAll', 'App\Http\Controllers\KodDaerahController@deleteAll');


Route::resource('/kod_sijil_iso','App\Http\Controllers\KodSijilIsoController'::class);

Route::resource('/kod_status_syarikat','App\Http\Controllers\KodStatusSyarikatController'::class);

Route::resource('/template_perjanjian_main','App\Http\Controllers\TemplatePerjanjianMainController'::class);
Route::delete('template_perjanjian_DeleteAll', 'App\Http\Controllers\TemplatePerjanjianMainController@deleteAll');
Route::post('/template_detail','App\Http\Controllers\TemplatePerjanjianMainController@getDetailTemplate');

Route::delete('template_perjanjian_D_DeleteAll', 'App\Http\Controllers\TemplatePerjanjianDetailController@deleteAll');
Route::resource('/template_perjanjian_detail','App\Http\Controllers\TemplatePerjanjianDetailController'::class);

Route::resource('/spp_proses_template_detail','App\Http\Controllers\SppProsesTemplateDetailController'::class);

Route::resource('/spp_proses_template_sijil','App\Http\Controllers\SppProsesTemplateSijilController'::class);

Route::resource('/spp_proses_template_sijil_detail','App\Http\Controllers\SppProsesTemplateSijilDetailController'::class);
Route::post('/spp_proses_template_sijil_detail_index','App\Http\Controllers\SppProsesTemplateSijilDetailController@index');

Route::resource('/sw_menu_main','App\Http\Controllers\SwMenuMainController'::class);

Route::resource('/sw_menu_detail','App\Http\Controllers\SwMenuDetailController'::class);
Route::delete('delete1/{id}', 'App\Http\Controllers\SwMenuDetailController@destroy');
Route::delete('sw_mm_DeleteAll', 'App\Http\Controllers\SwMenuDetailController@deleteAll');

Route::resource('/psm_biodata','App\Http\Controllers\PsmBiodataController'::class);
Route::post('carian_kakitangan','App\Http\Controllers\PsmBiodataController@getKakitangan');

Route::resource('/spp_pelanggan_syarikat','App\Http\Controllers\SppPelangganSyarikatController'::class);
Route::post('carian_pelanggan','App\Http\Controllers\SppPelangganSyarikatController@getPelanggan');
Route::post('carian_pelanggan_tambah','App\Http\Controllers\SppPelangganSyarikatController@getPelangganTambah');










require __DIR__.'/auth.php';
