<?php

namespace App\Http\Controllers;

use App\Models\kod_kategori_servis;
use App\Models\spp_pusat_khidmat;
use App\Models\spp_pusat_khidmat_servis;
use Illuminate\Http\Request;

class SppPusatKhidmatServisController extends Controller
{
    public function getKodKategoriServis(Request $request){
        $myvariable2 = [];
        $tajuks = kod_kategori_servis::get();
        foreach($tajuks as $kod){
            $myvariable2['kkat'][] = $kod;
        }
        echo json_encode($myvariable2);
        exit();
    }


    public function getPusatPerkhidmatanServis(Request $request){
        $myvariable = [];
        $tajuks = spp_pusat_khidmat_servis::where('idPKhidmat',$request->id1)->where('idKatServis',$request->id)->get();
        // echo "__".$request->id1; find value
        // echo "__".$request->id;
        // exit;
        foreach($tajuks as $kod){
            $myvariable['pks'][] = $kod;
        }
        echo json_encode($myvariable);
        exit();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spp_pusat_khidmat = spp_pusat_khidmat::all();
        $spp_pusat_khidmat_servis = spp_pusat_khidmat_servis::all();
        $kod_kategori_servis = kod_kategori_servis::all();

        return view('spp_pusat_khidmat_servis.index',[
            'spp_pusat_khidmat_servis'=>$spp_pusat_khidmat,
            'spp_pusat_khidmat_servis2'=>$spp_pusat_khidmat_servis,
            'spp_pusat_khidmat_servis3'=>$kod_kategori_servis,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {        
        $spp_pusat_khidmat = spp_pusat_khidmat::all();
        $spp_pusat_khidmat_servis = spp_pusat_khidmat_servis::all();
        $kod_kategori_servis = kod_kategori_servis::all();
        $pusat_perkhidmatan12 = $request->pusat_perkhidmatan12;
        $kategori_servis1 = $request->kategori_servis1 ;


        return view('spp_pusat_khidmat_servis.create',[
            'spp_pusat_khidmat_servis'=>$spp_pusat_khidmat,
            'spp_pusat_khidmat_servis2'=>$spp_pusat_khidmat_servis,
            'spp_pusat_khidmat_servis3'=>$kod_kategori_servis,
            'spp_pusat_khidmat_servis4'=>$pusat_perkhidmatan12,
            'spp_pusat_khidmat_servis5'=>$kategori_servis1,

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
        $spp_pusat_khidmat_servis = new spp_pusat_khidmat_servis();
        $spp_pusat_khidmat_servis->idPKhidmat = $request->idPKhidmat;
        $spp_pusat_khidmat_servis->idKatServis = $request->idKatServis;
        $spp_pusat_khidmat_servis->kod = $request->kod;
        $spp_pusat_khidmat_servis->nama = $request->nama;
        $spp_pusat_khidmat_servis->catatan = $request->catatan;
        $spp_pusat_khidmat_servis->namaE = $request->namaE;
        $spp_pusat_khidmat_servis->catatanE = $request->catatanE;

        $spp_pusat_khidmat_servis->save();
        return redirect('/spp_pusat_khidmat_servis');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\spp_pusat_khidmat_servis  $spp_pusat_khidmat_servis
     * @return \Illuminate\Http\Response
     */
    public function show(spp_pusat_khidmat_servis $spp_pusat_khidmat_servis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\spp_pusat_khidmat_servis  $spp_pusat_khidmat_servis
     * @return \Illuminate\Http\Response
     */
    public function edit( $spp_pusat_khidmat_servis)
    {
        $spp_pusat_khidmat_servis1 = spp_pusat_khidmat::all();
        // $spp_pusat_khidmat_servis2 = kod_kategori_servis::all();

        $spp_pusat_khidmat_servis = spp_pusat_khidmat_servis::where('id', $spp_pusat_khidmat_servis)->first();

        return view('spp_pusat_khidmat_servis.edit',[
            'spp_pusat_khidmat_servis'=>$spp_pusat_khidmat_servis,
            'spp_pusat_khidmat_servis1'=>$spp_pusat_khidmat_servis1,
            // 'spp_pusat_khidmat_servis2'=>$spp_pusat_khidmat_servis2
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\spp_pusat_khidmat_servis  $spp_pusat_khidmat_servis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, spp_pusat_khidmat_servis $spp_pusat_khidmat_servis)
    {
        // dd($request);
        $spp_pusat_khidmat_servis = spp_pusat_khidmat_servis::where('id', $request-> id)->first();
        $spp_pusat_khidmat_servis->idPKhidmat = $request->idPKhidmat;
        $spp_pusat_khidmat_servis->idKatServis = $request->idKatServis;
        $spp_pusat_khidmat_servis->nama = $request->nama;
        $spp_pusat_khidmat_servis->catatan = $request->catatan;
        $spp_pusat_khidmat_servis->namaE = $request->namaE;
        $spp_pusat_khidmat_servis->catatanE = $request->catatanE;

        $spp_pusat_khidmat_servis->save();
        return redirect('/spp_pusat_khidmat_servis');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\spp_pusat_khidmat_servis  $spp_pusat_khidmat_servis
     * @return \Illuminate\Http\Response
     */
    public function destroy(spp_pusat_khidmat_servis $spp_pusat_khidmat_servis)
    {   
        $spp_pusat_khidmat_servis->delete();
        return redirect('/spp_pusat_khidmat_servis')
        ->with('success', ' deleted successfully');
    }
}
