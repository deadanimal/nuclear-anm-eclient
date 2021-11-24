<?php

namespace App\Http\Controllers;

use App\Models\permohonan_sebutharga_dalaman;
use App\Models\spp_profil_harga_servis;
use App\Models\spp_pusat_khidmat;
use App\Models\spp_pusat_khidmat_servis;
use Illuminate\Http\Request;

class PermohonanSebuthargaDalamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permohonan_sebutharga_dalaman = permohonan_sebutharga_dalaman::all();
        return view('permohonan_sebutharga_dalaman.index',[
            '$permohonan_sebutharga_dalaman'=>$permohonan_sebutharga_dalaman,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPusatPerkhidmatan1(Request $request){
        $myvariable = [];
        $tajuks = spp_pusat_khidmat_servis::where('idPKhidmat',$request->id)->get();
        foreach($tajuks as $t){
            $myvariable['aos'][] = $t;
        }
        echo json_encode($myvariable);
        exit();
    }


    public function getJenisPerkhidmatan1(Request $request){
        $myvariable1 = [];
        $tajuks1 = spp_profil_harga_servis::where('idPKhidmat',$request->id)->get();
        foreach($tajuks1 as $t1){
            $myvariable1['aos1'][] = $t1;
        }
        echo json_encode($myvariable1);
        exit();
    }

    public function create()
    {
        $spp_pusat_khidmat = spp_pusat_khidmat::all();
        $spp_pusat_khidmat_servis = spp_pusat_khidmat_servis::all();
        $spp_profil_harga_servis = spp_profil_harga_servis::all();



        return view('permohonan_sebutharga_dalaman.create',[
            'permohonan_sebutharga_dalaman'=>$spp_pusat_khidmat,
            'permohonan_sebutharga_dalaman2'=>$spp_pusat_khidmat_servis,
            'permohonan_sebutharga_dalaman3'=>$spp_profil_harga_servis,

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
        $permohonan_sebutharga_dalaman = new permohonan_sebutharga_dalaman;
        $permohonan_sebutharga_dalaman->sebutharga_jenis_permohonan = $request->sebutharga_jenis_permohonan;
        $permohonan_sebutharga_dalaman->name = $request->name;
        $permohonan_sebutharga_dalaman->no_pelanggan = $request->no_pelanggan;
        $permohonan_sebutharga_dalaman->note = $request->note;
        $permohonan_sebutharga_dalaman->pusat_perkhimatan = $request->pusat_perkhimatan;
        $permohonan_sebutharga_dalaman->jenis_perkhimatan = $request->jenis_perkhimatan;
        $permohonan_sebutharga_dalaman->harga_perkhimatan = $request->harga_perkhimatan;
        $permohonan_sebutharga_dalaman->jumlah_perkhimatan = $request->jumlah_perkhimatan;

        $permohonan_sebutharga_dalaman->save();
        return redirect('/permohonan_sebutharga_dalaman');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\permohonan_sebutharga_dalaman  $permohonan_sebutharga_dalaman
     * @return \Illuminate\Http\Response
     */
    public function show(permohonan_sebutharga_dalaman $permohonan_sebutharga_dalaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\permohonan_sebutharga_dalaman  $permohonan_sebutharga_dalaman
     * @return \Illuminate\Http\Response
     */
    public function edit(permohonan_sebutharga_dalaman $permohonan_sebutharga_dalaman)
    {
        return view('permohonan_sebutharga_dalaman.edit',[
            'permohonan_sebutharga_dalaman'=>$permohonan_sebutharga_dalaman
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\permohonan_sebutharga_dalaman  $permohonan_sebutharga_dalaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, permohonan_sebutharga_dalaman $permohonan_sebutharga_dalaman)
    {
        $permohonan_sebutharga_dalaman->name = $request->name;
        $permohonan_sebutharga_dalaman->type = $request->type;
        $permohonan_sebutharga_dalaman->doc_type = $request->doc_type;
        $permohonan_sebutharga_dalaman->expirydate = $request->expirydate;
        $permohonan_sebutharga_dalaman->status = $request->status;

        $permohonan_sebutharga_dalaman->save();

        return redirect('/permohonan_sebutharga_dalaman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\permohonan_sebutharga_dalaman  $permohonan_sebutharga_dalaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(permohonan_sebutharga_dalaman $permohonan_sebutharga_dalaman)
    {
        //
    }
}
