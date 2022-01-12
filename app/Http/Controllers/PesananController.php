<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\SppQuotation;
use Illuminate\Http\Request;
use App\Models\SppProfilSyarikat;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use DateTime;
use Redirect;
use DB;
use Illuminate\Support\Facades\Http;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        $search_text = $_GET['query'];
        $pelanggan = Pesanan::where('nama','LIKE','%'.$search_text.'%')->get();

        return view('pesanan.create');
    }


    public function index()
    {
        $pesanan = Pesanan::with('profilSyarikat')->offset(0)->limit(500)->get();
        return view('pesanan.index',['pesanan'=>$pesanan]);
    }
    
    public function index_lulus()
    {
        $pesanan = Pesanan::with('profilSyarikat')->offset(0)->limit(500)->get();
        return view('pesanan.index_lulus',['pesanan'=>$pesanan]);
    }
    
    public function jana_pesanan(){
        $pesanan = [];
        return view('pesanan.jana_pesanan',['pesanan'=>$pesanan]);
    }
    
    public function cari_sebutharga(Request $request){
        $found = 0;
        $sebutharga = SppQuotation::where('noQuo','like','%'.$request->no_sebutharga.'%')->get();
        if(!is_null($sebutharga)){
            $found = 1;
        }
        echo json_encode(['found'=>$found,'sebutharga'=>$sebutharga]);
    }
    
    public function cetakSebutHarga($id){
        $sebutharga = SppQuotation::with('quotationPelanggan.pelanggan','quotationKumpulan.kumpulanDetail','quotationDetail','quotationDetail.profilHargaServis')->where('id',$id)->get()->first();
        return view('pesanan.cetak_sebutHarga',['sebutharga'=>$sebutharga]);
    }
    
    public function jana_pesanan_maklumat_pesanan(){
        $sebutharga = [];
        return view('pesanan.jana_pesanan.maklumat_pesanan',['sebutharga'=>$sebutharga]);
    }
    
    public function simpanMaklumatPesanan(){
        $sebutharga = [];
        return view('pesanan.jana_pesanan.pesanan_terperinci',['sebutharga'=>$sebutharga]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $spp_profil_syarikat = spp_profil_syarikat::all();

        return view('pesanan.create',[
            'pesanan'=>$spp_profil_syarikat

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function show(pesanan $pesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(pesanan $pesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pesanan $pesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(pesanan $pesanan)
    {
        //
    }
}
