<?php

namespace App\Http\Controllers;

use App\Models\kod_kategori_servis;
use App\Models\spp_proses_template_detail;
use App\Models\spp_proses_template_main;
use Illuminate\Http\Request;

class KodKategoriServisController extends Controller
{
    public function getProsesTemplate(Request $request){
        // dd('masuk');
        $itmp = [];
        $it = spp_proses_template_main::where('idKatServis',$request->id)->get();
        foreach($it as $kod){
            $itmp['ipt'][] = $kod;
        }
        echo json_encode($itmp);
        exit();
    }
    public function getDetailProses(Request $request)
    {
                // dd($request);
        $searchNama = [];

        if (isset($request->id)){
            $searchNama = spp_proses_template_detail::where('idTemplate',$request->id)
            ->get();
        }
        return view('kod_kategori_servis.carian',[
            'kod_kategori_servis'=>$searchNama,
        ]);
    }
    


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kod_kategori_servis = kod_kategori_servis::all();

        return view('kod_kategori_servis.index',[
            'kod_kategori_servis'=>$kod_kategori_servis,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kod_kategori_servis = new kod_kategori_servis();
        $kod_kategori_servis->kod = $request->kod;
        $kod_kategori_servis->nama = $request->nama;

        $kod_kategori_servis->save();
        return redirect('/kod_kategori_servis');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kod_kategori_servis  $kod_kategori_servis
     * @return \Illuminate\Http\Response
     */
    public function show(kod_kategori_servis $kod_kategori_servis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kod_kategori_servis  $kod_kategori_servis
     * @return \Illuminate\Http\Response
     */
    public function edit(kod_kategori_servis $kod_kategori_servis)
    {
        $kod_kategori_servis = kod_kategori_servis::all();

        return view('kod_kategori_servis.edit',[
            'kod_kategori_servis'=>$kod_kategori_servis,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kod_kategori_servis  $kod_kategori_servis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kod_kategori_servis $kod_kategori_servis)
    {
        $kod_kategori_servis->kod = $request->kod;
        $kod_kategori_servis->nama = $request->nama;

        $kod_kategori_servis->save();
        return redirect('/kod_kategori_servis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kod_kategori_servis  $kod_kategori_servis
     * @return \Illuminate\Http\Response
     */
    public function destroy(kod_kategori_servis $kod_kategori_servis)
    {
        $kod_kategori_servis->delete();
        return redirect('/kod_kategori_servis')
        ->with('success', 'deleted successfully');
    }
}
