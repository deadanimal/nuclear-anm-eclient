<?php

namespace App\Http\Controllers;

use App\Models\spp_pusat_khidmat;
use App\Models\psm_biodata;
use App\Models\spp_staf_info;
use Illuminate\Http\Request;

class PsmBiodataController extends Controller
{
    public function getKakitangan( Request $request){

        // dd($request);
        $searchNama = [];
        $spp_pusat_khidmat = spp_pusat_khidmat::all();
        // $psm_biodata = psm_biodata::all();
        $psm_biodata1 = spp_staf_info::all();
        if (isset($request->Bio_Nama)){
            $searchNama = psm_biodata::where('Bio_Nama', 'LIKE', '%'.$request->Bio_Nama.'%')
            ->orderBy('Bio_Nama', 'asc')->get();
        }

        if (isset($request->idPkhidmat)){
            $searchNama = spp_staf_info::where('idPkhidmat',$request->idPkhidmat)
            ->with('staffPkhidmat')
            ->orderBy('biopin', 'asc')
            ->get();
        }
        if (isset($request->Bio_Nama,$request->idPkhidmat)){
            $searchNama = spp_staf_info::where('idPkhidmat',$request->idPkhidmat)
            ->whereHas('staffPkhidmat')
            // ->where('Bio_Nama', 'LIKE', '%'.$request->Bio_Nama.'%')
            ->orderBy('biopin', 'asc')
            ->get();
        }
        
        return view('psm_biodata.carian',[
            'psm_biodata'=>$searchNama,
            'psm_biodata2'=>$spp_pusat_khidmat,
            'psm_biodata1'=>$psm_biodata1,
            // 'psm_biodata3'=>$psm_biodata,
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spp_pusat_khidmat = spp_pusat_khidmat::all();

        return view('psm_biodata.index',[
            // psm_biodata = $psm_biodata,
            'psm_biodata1'=>$spp_pusat_khidmat,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('psm_biodata.create');
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
     * @param  \App\Models\psm_biodata  $psm_biodata
     * @return \Illuminate\Http\Response
     */
    public function show(psm_biodata $psm_biodata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\psm_biodata  $psm_biodata
     * @return \Illuminate\Http\Response
     */
    public function edit(spp_staf_info $spp_staf_info)
    {
        $spp_pusat_khidmat = spp_pusat_khidmat::all();
        return view('psm_biodata.edit',[
            'psm_biodata'=>$spp_staf_info,
            'psm_biodata1'=>$spp_pusat_khidmat,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\psm_biodata  $psm_biodata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, psm_biodata $psm_biodata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\psm_biodata  $psm_biodata
     * @return \Illuminate\Http\Response
     */
    public function destroy(psm_biodata $psm_biodata)
    {
        //
    }
}
