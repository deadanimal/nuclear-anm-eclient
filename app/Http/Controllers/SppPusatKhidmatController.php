<?php

namespace App\Http\Controllers;

use App\Models\spp_pusat_khidmat;
use Illuminate\Http\Request;
use App\Models\kod_kategori_servis;

class SppPusatKhidmatController extends Controller
{
    public function getPusatPerkhidmatan(Request $request){
        $myvariable = [];
        $tajuks = spp_pusat_khidmat::where('idKatServis',$request->id)->get();
        foreach($tajuks as $t){
            $myvariable['aos'][] = $t;
        }
        echo json_encode($myvariable);
        exit();
    }


    public function getKategoriServis(Request $request){
        $myvariable1 = [];
        $tajuks1 = kod_kategori_servis::where('idPKhidmat',$request->id)->get();
        foreach($tajuks1 as $t1){
            $myvariable1['aos1'][] = $t1;
        }
        echo json_encode($myvariable1);
        exit();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\spp_pusat_khidmat  $spp_pusat_khidmat
     * @return \Illuminate\Http\Response
     */
    public function show(spp_pusat_khidmat $spp_pusat_khidmat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\spp_pusat_khidmat  $spp_pusat_khidmat
     * @return \Illuminate\Http\Response
     */
    public function edit(spp_pusat_khidmat $spp_pusat_khidmat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\spp_pusat_khidmat  $spp_pusat_khidmat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, spp_pusat_khidmat $spp_pusat_khidmat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\spp_pusat_khidmat  $spp_pusat_khidmat
     * @return \Illuminate\Http\Response
     */
    public function destroy(spp_pusat_khidmat $spp_pusat_khidmat)
    {
        //
    }
}
