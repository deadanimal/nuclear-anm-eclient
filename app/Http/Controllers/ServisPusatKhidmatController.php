<?php

namespace App\Http\Controllers;

use App\Models\servis_pusat_khidmat;
use Illuminate\Http\Request;
use App\Models\spp_pusat_khidmat;
use App\Models\spp_pusat_khidmat_servis;
use App\Models\kod_kategori_servis;

class ServisPusatKhidmatController extends Controller
{
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



        return view('servis_pusat_khidmat.index',[
            'servis_pusat_khidmat'=>$spp_pusat_khidmat,
            'servis_pusat_khidmat2'=>$spp_pusat_khidmat_servis,
            'servis_pusat_khidmat3'=>$kod_kategori_servis,

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\servis_pusat_khidmat  $servis_pusat_khidmat
     * @return \Illuminate\Http\Response
     */
    public function show(servis_pusat_khidmat $servis_pusat_khidmat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\servis_pusat_khidmat  $servis_pusat_khidmat
     * @return \Illuminate\Http\Response
     */
    public function edit(servis_pusat_khidmat $servis_pusat_khidmat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\servis_pusat_khidmat  $servis_pusat_khidmat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, servis_pusat_khidmat $servis_pusat_khidmat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\servis_pusat_khidmat  $servis_pusat_khidmat
     * @return \Illuminate\Http\Response
     */
    public function destroy(servis_pusat_khidmat $servis_pusat_khidmat)
    {
        //
    }
}
