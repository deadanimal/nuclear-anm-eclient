<?php

namespace App\Http\Controllers;

use App\Models\permohonan_sebutharga_luaran;
use App\Models\spp_pusat_khidmat;
use App\Models\spp_profil_harga_servis;
use App\Models\spp_pusat_khidmat_servis;
use Illuminate\Http\Request;

class PermohonanSebuthargaLuaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permohonan_sebutharga_luaran = permohonan_sebutharga_luaran::all();
        return view('permohonan_sebutharga_luaran.index',[
            '$permohonan_sebutharga_luaran'=>$permohonan_sebutharga_luaran,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPusatPerkhidmatan(Request $request){
        $myvariable = [];
        $tajuks = spp_pusat_khidmat_servis::where('idPKhidmat',$request->id)->get();
        foreach($tajuks as $t){
            $myvariable['aos'][] = $t;
        }
        echo json_encode($myvariable);
        exit();
    }


    public function getJenisPerkhidmatan(Request $request){
        $myvariable1 = [];
        $tajuks1 = spp_profil_harga_servis::where('idPKhidmatServis',$request->id)->get();
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



        return view('permohonan_sebutharga_luaran.create',[
            'permohonan_sebutharga_luaran'=>$spp_pusat_khidmat,
            'permohonan_sebutharga_luaran2'=>$spp_pusat_khidmat_servis,
            'permohonan_sebutharga_luaran3'=>$spp_profil_harga_servis,

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
        $permohonan_sebutharga_luaran = new permohonan_sebutharga_luaran;
        $permohonan_sebutharga_luaran->sebutharga_jenis_permohonan = $request->sebutharga_jenis_permohonan;
        $permohonan_sebutharga_luaran->name = $request->name;
        $permohonan_sebutharga_luaran->no_pelanggan = $request->no_pelanggan;
        $permohonan_sebutharga_luaran->note = $request->note;
        $permohonan_sebutharga_luaran->pusat_perkhimatan = $request->pusat_perkhimatan;
        $permohonan_sebutharga_luaran->jenis_perkhimatan = $request->jenis_perkhimatan;
        $permohonan_sebutharga_luaran->harga_perkhimatan = $request->harga_perkhimatan;
        $permohonan_sebutharga_luaran->jumlah_perkhimatan = $request->jumlah_perkhimatan;

        $permohonan_sebutharga_luaran->save();
        return redirect('/permohonan_sebutharga_luaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\permohonan_sebutharga_luaran  $permohonan_sebutharga_luaran
     * @return \Illuminate\Http\Response
     */
    public function show(permohonan_sebutharga_luaran $permohonan_sebutharga_luaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\permohonan_sebutharga_luaran  $permohonan_sebutharga_luaran
     * @return \Illuminate\Http\Response
     */
    public function edit(permohonan_sebutharga_luaran $permohonan_sebutharga_luaran)
    {
        return view('permohonan_sebutharga_luaran.edit',[
            'permohonan_sebutharga_luaran'=>$permohonan_sebutharga_luaran
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\permohonan_sebutharga_luaran  $permohonan_sebutharga_luaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, permohonan_sebutharga_luaran $permohonan_sebutharga_luaran)
    {
        $permohonan_sebutharga_luaran->name = $request->name;
        $permohonan_sebutharga_luaran->type = $request->type;
        $permohonan_sebutharga_luaran->doc_type = $request->doc_type;
        $permohonan_sebutharga_luaran->expirydate = $request->expirydate;
        $permohonan_sebutharga_luaran->status = $request->status;

        $permohonan_sebutharga_luaran->save();

        return redirect('/permohonan_sebutharga_luaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\permohonan_sebutharga_luaran  $permohonan_sebutharga_luaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(permohonan_sebutharga_luaran $permohonan_sebutharga_luaran)
    {
        //
    }
}
