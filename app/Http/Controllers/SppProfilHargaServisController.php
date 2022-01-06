<?php

namespace App\Http\Controllers;

use App\Models\spp_profil_harga_servis;
use App\Models\spp_pusat_khidmat;
use Illuminate\Http\Request;

class SppProfilHargaServisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spp_pusat_khidmat = spp_pusat_khidmat::all();

        return view('spp_profil_harga_servis.index',[
            'spp_profil_harga_servis'=>$spp_pusat_khidmat,

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
        $pusat_perkhidmatan12 = $request->pusat_perkhidmatan12;
        $jenis_perkhidmatan1 = $request->jenis_perkhidmatan1;

        return view('spp_profil_harga_servis.create',[
            'spp_profil_harga_servis'=>$spp_pusat_khidmat,
            'spp_profil_harga_servis4'=>$pusat_perkhidmatan12,
            'spp_profil_harga_servis5'=>$jenis_perkhidmatan1,

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
        $spp_profil_harga_servis = new spp_profil_harga_servis;

        $spp_profil_harga_servis->idPKhidmat = $request->idPKhidmat;
        $spp_profil_harga_servis->idPKhidmatServis = $request->idPKhidmatServis;
        $spp_profil_harga_servis->idKatServis = $request->idKatServis;
        $spp_profil_harga_servis->nama = $request->nama;
        $spp_profil_harga_servis->namaE = $request->namaE;
        $spp_profil_harga_servis->flatHarga = $request->flatHarga;
        $spp_profil_harga_servis->hargaY = $request->hargaY;
        $spp_profil_harga_servis->hargaT = $request->hargaT;
        $spp_profil_harga_servis->unitHarga = $request->unitHarga;
        $spp_profil_harga_servis->catatan = $request->catatan;

        $spp_profil_harga_servis->save();
        return redirect('/spp_profil_harga_servis');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\spp_profil_harga_servis  $spp_profil_harga_servis
     * @return \Illuminate\Http\Response
     */
    public function show(spp_profil_harga_servis $spp_profil_harga_servis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\spp_profil_harga_servis  $spp_profil_harga_servis
     * @return \Illuminate\Http\Response
     */
    public function edit(spp_profil_harga_servis $spp_profil_harga_servis)
    {
        // dd('masuk');
        // $spp_profil_harga_servis = spp_profil_harga_servis::where('id', $spp_profil_harga_servis)->first();
        dd($spp_profil_harga_servis);
        // $spp_profil_harga_servis = spp_profil_harga_servis::all();

        return view('spp_profil_harga_servis.edit',[
            'spp_profil_harga_servis'=>$spp_profil_harga_servis,
            // 'spp_profil_harga_servis1'=>$spp_profil_harga_servis,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\spp_profil_harga_servis  $spp_profil_harga_servis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, spp_profil_harga_servis $spp_profil_harga_servis)
    {
        $request->validate([
            'nama'=> 'required',
            'namaE'=> 'required', 
            // >flatflatHarga=> 'required',
            'hargaY'=> 'required',
            'hargaT'=> 'required',
            'unitunitHarga'=> 'required',
            // >cacatatan=> 'required',
    
        ]);
        $spp_profil_harga_servis->update($request->all());
        // dd('submit');
    
        return redirect()->route('$spp_profil_harga_servis.index')
                        ->with('success','$spp_profil_harga_servis updated successfully');

        // $spp_profil_harga_servis = spp_profil_harga_servis::where('id', $spp_profil_harga_servis)->first();
        // $spp_profil_harga_servis = spp_profil_harga_servis::where('id',$request->customInputId)->get()->first();
        // $spp_profil_harga_servis =  spp_profil_harga_servis::all();
        // dd($spp_profil_harga_servis);


        // $spp_profil_harga_servis->nama = $request->nama;
        // $spp_profil_harga_servis->namaE = $request->namaE; 
        // // $spp_profil_harga_servis->flatHarga = $request->flatHarga;
        // $spp_profil_harga_servis->hargaY = $request->hargaY;
        // // $spp_profil_harga_servis->hargaT = $request->hargaT;
        // $spp_profil_harga_servis->unitHarga = $request->unitHarga;
        // // $spp_profil_harga_servis->catatan = $request->catatan;


        // $spp_profil_harga_servis->update($request->all());

        // return redirect('/spp_profil_harga_servis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\spp_profil_harga_servis  $spp_profil_harga_servis
     * @return \Illuminate\Http\Response
     */
    public function destroy(spp_profil_harga_servis $spp_profil_harga_servis)
    {
        $spp_profil_harga_servis->delete();
        return redirect('/spp_profil_harga_servis')
        ->with('success', ' deleted successfully');
    }
}
