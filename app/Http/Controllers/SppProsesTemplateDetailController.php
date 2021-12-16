<?php

namespace App\Http\Controllers;

use App\Models\spp_proses_template_detail;
use Illuminate\Http\Request;

class SppProsesTemplateDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spp_proses_template_detail = spp_proses_template_detail::all();

        return view('spp_proses_template_detail.index',[
            'spp_proses_template_detail'=>$spp_proses_template_detail,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('spp_proses_template_detail');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $spp_proses_template_detail = new spp_proses_template_detail();
        $spp_proses_template_detail->urutan = $request->urutan;
        $spp_proses_template_detail->namaProses = $request->namaProses;
        $spp_proses_template_detail->flagWajib = $request->flagWajib;
        $spp_proses_template_detail->href = $request->href;

        $spp_proses_template_detail->save();
        return redirect('/spp_proses_template_detail');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\spp_proses_template_detail  $spp_proses_template_detail
     * @return \Illuminate\Http\Response
     */
    public function show(spp_proses_template_detail $spp_proses_template_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\spp_proses_template_detail  $spp_proses_template_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(spp_proses_template_detail $spp_proses_template_detail)
    {
        return view('spp_proses_template_detail.edit',[
            'spp_proses_template_detail' => $spp_proses_template_detail,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\spp_proses_template_detail  $spp_proses_template_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, spp_proses_template_detail $spp_proses_template_detail)
    {
        $spp_proses_template_detail->urutan = $request->urutan;
        $spp_proses_template_detail->namaProses = $request->namaProses;
        $spp_proses_template_detail->flagWajib = $request->flagWajib;
        $spp_proses_template_detail->href = $request->href;

        $spp_proses_template_detail->save();
        return redirect('detail_proses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\spp_proses_template_detail  $spp_proses_template_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(spp_proses_template_detail $spp_proses_template_detail)
    {
        $spp_proses_template_detail->delete();
        return redirect('/spp_proses_template_detail')
        ->with('success','deleted succesfully');
    }
}
