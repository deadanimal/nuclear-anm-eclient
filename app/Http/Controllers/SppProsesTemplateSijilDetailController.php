<?php

namespace App\Http\Controllers;

use App\Models\spp_proses_template_sijil_detail;
use Illuminate\Http\Request;

class SppProsesTemplateSijilDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd($request);
        if (isset($request->id)){
            $searchNama = spp_proses_template_sijil_detail::where('idTemplateSijil',$request->id)
            ->get();
        }
        return view('spp_proses_template_sijil_detail.index',[
            'spp_proses_template_sijil_detail'=>$searchNama,
        ]);

        // $spp_proses_template_sijil_detail = spp_proses_template_sijil_detail::all();

        // return view('spp_proses_template_sijil_detail.index',[
        //     'spp_proses_template_sijil_detail'=>$spp_proses_template_sijil_detail,
        // ]);
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
        $spp_proses_template_sijil_detail = new spp_proses_template_sijil_detail();
        $spp_proses_template_sijil_detail->idTemplate = $request->idTemplate;
        $spp_proses_template_sijil_detail->urutan = $request->urutan;
        $spp_proses_template_sijil_detail->level = $request->level;
        $spp_proses_template_sijil_detail->bil = $request->bil;
        $spp_proses_template_sijil_detail->keterangan = $request->keterangan;

        $spp_proses_template_sijil_detail->save();
        return redirect('spp_proses_template_sijil_detail');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\spp_proses_template_sijil_detail  $spp_proses_template_sijil_detail
     * @return \Illuminate\Http\Response
     */
    public function show(spp_proses_template_sijil_detail $spp_proses_template_sijil_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\spp_proses_template_sijil_detail  $spp_proses_template_sijil_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(spp_proses_template_sijil_detail $spp_proses_template_sijil_detail)
    {
        return view('spp_proses_template_sijil_detail.edit',[
            'spp_proses_template_sijil_detail'=>$spp_proses_template_sijil_detail,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\spp_proses_template_sijil_detail  $spp_proses_template_sijil_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, spp_proses_template_sijil_detail $spp_proses_template_sijil_detail)
    {
        $spp_proses_template_sijil_detail->idTemplateSijil = $request->idTemplateSijil;
        $spp_proses_template_sijil_detail->urutan = $request->urutan;
        $spp_proses_template_sijil_detail->level = $request->level;
        $spp_proses_template_sijil_detail->bil = $request->bil;
        $spp_proses_template_sijil_detail->keterangan = $request->keterangan;

        $spp_proses_template_sijil_detail->save();
        return redirect('spp_proses_template_sijil_detail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\spp_proses_template_sijil_detail  $spp_proses_template_sijil_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(spp_proses_template_sijil_detail $spp_proses_template_sijil_detail)
    {
        $spp_proses_template_sijil_detail->delete();
        return redirect('/spp_proses_template_sijil_detail')
        ->with('success', ' deleted successfully');
    }
}
