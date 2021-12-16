<?php

namespace App\Http\Controllers;

use App\Models\spp_pusat_khidmat;
use Illuminate\Http\Request;

class SppPusatKhidmatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        // dd('masuk');
        $spp_pusat_khidmat = spp_pusat_khidmat::all();

        return view('spp_pusat_khidmat.index',[
            'spp_pusat_khidmat'=>$spp_pusat_khidmat

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $spp_pusat_khidmat = spp_pusat_khidmat::all();

        return view('spp_pusat_khidmat.index',[
            'spp_pusat_khidmat'=>$spp_pusat_khidmat

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
        $spp_pusat_khidmat = new spp_pusat_khidmat();
        $spp_pusat_khidmat->kod = $request->kod;
        $spp_pusat_khidmat->kumpulan = $request->kumpulan;
        $spp_pusat_khidmat->nama = $request->nama;
        $spp_pusat_khidmat->namaE = $request->namaE;
        $spp_pusat_khidmat->cid = $request->cid;

        $spp_pusat_khidmat->save();
        return redirect('/spp_pusat_khidmat');

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
        $spp_pusat_khidmat1 = spp_pusat_khidmat::all();
        // $spp_pusat_khidmat = spp_pusat_khidmat::where('id', $spp_pusat_khidmat)->first();
        return view('spp_pusat_khidmat.edit',[
            'spp_pusat_khidmat'=>$spp_pusat_khidmat,
            'spp_pusat_khidmat1'=>$spp_pusat_khidmat1,
        ]);
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
        $spp_pusat_khidmat->kod = $request->kod;
        $spp_pusat_khidmat->kumpulan = $request->kumpulan;
        $spp_pusat_khidmat->nama = $request->nama;
        $spp_pusat_khidmat->namaE = $request->namaE;
        $spp_pusat_khidmat->cid = $request->cid;

        $spp_pusat_khidmat->save();
        return redirect('/spp_pusat_khidmat');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\spp_pusat_khidmat  $spp_pusat_khidmat
     * @return \Illuminate\Http\Response
     */
    public function destroy(spp_pusat_khidmat $spp_pusat_khidmat)
    {
        $spp_pusat_khidmat->delete();
        return redirect('/spp_pusat_khidmat')
        ->with('success', 'post deleted successfully');
    }
}
