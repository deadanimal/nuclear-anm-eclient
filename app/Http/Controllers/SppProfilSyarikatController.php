<?php

namespace App\Http\Controllers;

use App\Models\spp_profil_syarikat;
use App\Models\kod_kategori_syarikat;
use App\Models\kod_daerah;
use App\Models\kod_negeri;
use Illuminate\Http\Request;

class SppProfilSyarikatController extends Controller
{
    public function getSyarikat( Request $request){

        // dd($request);
        $searchNama = [];
        // $kod_kategori_syarikat = kod_kategori_syarikat::all();
        $spp_profil_syarikat = spp_profil_syarikat::all();

        if (isset($request->nama,$request->idKategoriSyarikat)){
            $searchNama = spp_profil_syarikat::where('nama', 'LIKE', '%'.$request->nama.'%')
            ->where('idKategoriSyarikat', 'LIKE', '%'.$request->idKategoriSyarikat.'%')
            ->get();
        }
        // dd($searchNama);
        // if (isset($request->('id'))){
        //     $searchNama = spp_profil_syarikat::where('idKategoriSyarikat', $request->idKategoriSyarikat)->get();
        // }
        return view('spp_profil_syarikat.carian',[
            'spp_profil_syarikat'=>$searchNama,
            // 'spp_profil_syarikat2'=>$kod_kategori_syarikat,
            'spp_profil_syarikat3'=>$spp_profil_syarikat,
        ]);
    }


    public function getDaerah(Request $request){
        $myvariable = [];
        $tajuks = kod_daerah::where('idNegeri',$request->id)->get();
        foreach($tajuks as $t){
            $myvariable['dae'][] = $t;
        }
        echo json_encode($myvariable);
        exit();
    }
    public function getKodKatSyarikat(Request $request){
        $myvariable2 = [];
        $tajuks2 = spp_profil_syarikat::where('idKategoriSyarikat',$request->id)->get();
        foreach($tajuks2 as $t){
            $myvariable2['nege'][] = $t;
        }
        echo json_encode($myvariable2);
        exit();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spp_profil_syarikat = spp_profil_syarikat::all();
        $kod_kategori_syarikat = kod_kategori_syarikat::all();
        $kod_negeri = kod_negeri::all();

        return view('spp_profil_syarikat.index',[
            'spp_profil_syarikat'=>$spp_profil_syarikat,
            'spp_profil_syarikat1'=>$kod_kategori_syarikat,
            'spp_profil_syarikat2'=>$kod_negeri,

        ]);
    }
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $spp_profil_syarikat = spp_profil_syarikat::all();
        $kod_kategori_syarikat = kod_kategori_syarikat::all();
        $kod_negeri = kod_negeri::all();



        return view('spp_profil_syarikat.create',[
            'spp_profil_syarikat'=>$spp_profil_syarikat,
            'spp_profil_syarikat1'=>$kod_kategori_syarikat,
            'spp_profil_syarikat2'=>$kod_negeri,
            
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
        $spp_profil_syarikat = new spp_profil_syarikat;


        $spp_profil_syarikat->idKategoriSyarikat = $request->idKategoriSyarikat;
        $spp_profil_syarikat->noSyarikat = $request->noSyarikat;
        $spp_profil_syarikat->nama = $request->nama;
        $spp_profil_syarikat->alamat1 = $request->alamat1;
        $spp_profil_syarikat->alamat = $request->alamat;
        $spp_profil_syarikat->poskod = $request->poskod;
        $spp_profil_syarikat->idDaerah = $request->idDaerah;
        $spp_profil_syarikat->idNegeri = $request->idNegeri;
        $spp_profil_syarikat->noTel = $request->noTel;
        $spp_profil_syarikat->noFax = $request->noFax;
        $spp_profil_syarikat->email = $request->email;
        $spp_profil_syarikat->flagMigrasi = $request->flagMigrasi;


        $spp_profil_syarikat->save();
        return redirect('/spp_profil_syarikat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\spp_profil_syarikat  $spp_profil_syarikat
     * @return \Illuminate\Http\Response
     */
    public function show(spp_profil_syarikat $spp_profil_syarikat )
    {

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\spp_profil_syarikat  $spp_profil_syarikat
     * @return \Illuminate\Http\Response
     */
    public function edit(spp_profil_syarikat $spp_profil_syarikat)
    {
        $spp_profil_syarikat = spp_profil_syarikat::where('id', $spp_profil_syarikat)->first();
        // dd($spp_profil_syarikat);
        // $spp_profil_syarikat = spp_profil_syarikat::all();

        return view('spp_profil_syarikat.edit',[
            'spp_profil_syarikat'=>$spp_profil_syarikat,
            // 'spp_profil_syarikat1'=>$spp_profil_syarikat,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\spp_profil_syarikat  $spp_profil_syarikat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, spp_profil_syarikat $spp_profil_syarikat)
    {
        $spp_profil_syarikat->idKategoriSyarikat = $request->idKategoriSyarikat;
        $spp_profil_syarikat->noSyarikat = $request->noSyarikat;
        $spp_profil_syarikat->nama = $request->nama;
        $spp_profil_syarikat->alamat1 = $request->alamat1;
        $spp_profil_syarikat->alamat = $request->alamat;
        $spp_profil_syarikat->poskod = $request->poskod;
        $spp_profil_syarikat->idDaerah = $request->idDaerah;
        $spp_profil_syarikat->idNegeri = $request->idNegeri;
        $spp_profil_syarikat->noTel = $request->noTel;
        $spp_profil_syarikat->noFax = $request->noFax;
        $spp_profil_syarikat->email = $request->email;
        $spp_profil_syarikat->flagMigrasi = $request->flagMigrasi;


        $spp_profil_syarikat->save();
        return redirect('/spp_profil_syarikat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\spp_profil_syarikat  $spp_profil_syarikat
     * @return \Illuminate\Http\Response
     */
    public function destroy(spp_profil_syarikat $spp_profil_syarikat)
    {
        $spp_profil_syarikat->delete();
        return redirect('/spp_profil_syarikat')
        ->with('success', ' deleted successfully');
    }
}
