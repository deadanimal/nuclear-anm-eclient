<?php

namespace App\Http\Controllers;

use App\Models\spp_proses_template_detail;
use App\Models\spp_proses_template_sijil;
use Illuminate\Http\Request;

class SppProsesTemplateSijilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spp_proses_template_sijil = spp_proses_template_sijil::all();

        return view('spp_proses_template_sijil.index',[
            'spp_proses_template_sijil'=>$spp_proses_template_sijil,
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
        $spp_proses_template_sijil = new spp_proses_template_sijil();
        $spp_proses_template_sijil->nama = $request->nama;

        $spp_proses_template_sijil->save();
        return redirect('spp_proses_template_sijil');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\spp_proses_template_sijil  $spp_proses_template_sijil
     * @return \Illuminate\Http\Response
     */
    public function show(spp_proses_template_sijil $spp_proses_template_sijil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\spp_proses_template_sijil  $spp_proses_template_sijil
     * @return \Illuminate\Http\Response
     */
    public function edit(spp_proses_template_sijil $spp_proses_template_sijil)
    {
        return view('spp_proses_template_sijil.edit',[
            'spp_proses_template_sijil'=>$spp_proses_template_sijil,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\spp_proses_template_sijil  $spp_proses_template_sijil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, spp_proses_template_sijil $spp_proses_template_sijil)
    {
        $spp_proses_template_sijil->nama = $request->nama;

        $spp_proses_template_sijil->save();
        return redirect('spp_proses_template_sijil');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\spp_proses_template_sijil  $spp_proses_template_sijil
     * @return \Illuminate\Http\Response
     */
    public function destroy(spp_proses_template_sijil $spp_proses_template_sijil)
    {
        $spp_proses_template_sijil->delete();
        return redirect('/spp_proses_template_sijil')
        ->with('success', ' deleted successfully');
    }
}
