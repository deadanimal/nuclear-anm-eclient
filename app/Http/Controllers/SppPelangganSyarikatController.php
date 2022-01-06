<?php

namespace App\Http\Controllers;

use App\Models\spp_pelanggan_syarikat;
use App\Models\spp_profil_syarikat;
use App\Models\kod_kategori_syarikat;
use App\Models\kod_status_syarikat;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class SppPelangganSyarikatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPelanggan( Request $request){

        // dd($request);
        $searchNama = [];
        $kod_status_syarikat = kod_status_syarikat::all();
        // $kod_kategori_syarikat = kod_kategori_syarikat::all();
        $spp_pelanggan_syarikat = spp_pelanggan_syarikat::all();
        if (isset($request->nama)){
            $searchNama = spp_profil_syarikat::where('nama', 'LIKE', '%'.$request->nama.'%')
            ->get();
        }
        // dd($searchNama);
        if (isset($request->noAkaun)){
            $searchNama = spp_pelanggan_syarikat::where('noAkaun',$request->noAkaun)
            ->whereHas('pelangganSyarikat')
            ->get();
        }

        if (isset($request->idStatusSyarikat)){
            $searchNama = spp_pelanggan_syarikat::where('idStatusSyarikat', $request->idStatusSyarikat)
            ->get();
        }
        if (isset($request->nama,$request->idStatusSyarikat)){
            // $searchNama = spp_pelanggan_syarikat::where('idStatusSyarikat', $request->idStatusSyarikat)
            // ->with('pelangganSyarikat', function ($q) {
            //     $q->whereHas('nama', 'LIKE', '%'.$request->nama.'%');
            // })
            // ->get();

            $searchNama = spp_pelanggan_syarikat::where('idStatusSyarikat', $request->idStatusSyarikat)->get();

            $a = array();
            // dd($searchNama);

            foreach ($searchNama as $s) {

                // dd($s->pelangganSyarikat->nama);
                // dd($s->pelangganSyarikat->nama."/".Str::upper($request->nama));
                // if(stripos($s->pelangganSyarikat->nama,$request->nama) !== FALSE){
                // dd(($request->nama));
                // if($request->nama == ''){
                //     continue;
                // }
                if(stripos($s->pelangganSyarikat->nama, Str::upper($request->nama)) !== FALSE AND isset($s->pelangganSyarikat->nama) ){
                    // if(stripos(Str::upper($s->pelangganSyarikat->nama), Str::upper($request->nama)) !== FALSE){
                    // $a->array_push($a,$s->pelangganSyarikat);

                    $a[] = $s->pelangganSyarikat;
                }

                // $new = Arr::pluck($s->pelangganSyarikat->nama,$request->nama);find pluck or search
              
            }
            
            // ->where('nama', 'LIKE', '%'.$request->nama.'%')
        // ddd($searchNama);

            $searchNama = $a;
        }
        // dd($searchNama);
        // Contract::where('level', 1)->whereHas('customer', function ($q) {
        //     $q->whereNotNull('email'); // or email <> ''
        // })->get();
        // if (isset($request->('id'))){
        //     $searchNama = spp_pelanggan_syarikat::where('idStatusSyarikat', $request->idKategoriSyarikat)->get();
        // }
        return view('spp_pelanggan_syarikat.carian',[
            'spp_pelanggan_syarikat'=>$searchNama,
            'spp_pelanggan_syarikat1'=>$kod_status_syarikat,
            // 'spp_pelanggan_syarikat2'=>$spp_profil_syarikat,

            // 'spp_pelanggan_syarikat2'=>$kod_kategori_syarikat,
            // 'spp_pelanggan_syarikat3'=>$spp_pelanggan_syarikat,
        ]);
    }
    public function index()
    {
        $kod_status_syarikat = kod_kategori_syarikat::all();
        return view('spp_pelanggan_syarikat.index',[
            'spp_profil_syarikat1'=>$kod_status_syarikat
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spp_pelanggan_syarikat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $spp_pelanggan_syarikat = new spp_pelanggan_syarikat();
        // $spp_pelanggan_syarikat->nama = $request->nama
        // $spp_pelanggan_syarikat->idSyarikat = $request->idSyarikat
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\spp_pelanggan_syarikat  $spp_pelanggan_syarikat
     * @return \Illuminate\Http\Response
     */
    public function show(spp_pelanggan_syarikat $spp_pelanggan_syarikat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\spp_pelanggan_syarikat  $spp_pelanggan_syarikat
     * @return \Illuminate\Http\Response
     */
    public function edit(spp_pelanggan_syarikat $spp_pelanggan_syarikat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\spp_pelanggan_syarikat  $spp_pelanggan_syarikat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, spp_pelanggan_syarikat $spp_pelanggan_syarikat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\spp_pelanggan_syarikat  $spp_pelanggan_syarikat
     * @return \Illuminate\Http\Response
     */
    public function destroy(spp_pelanggan_syarikat $spp_pelanggan_syarikat)
    {
        //
    }
}
