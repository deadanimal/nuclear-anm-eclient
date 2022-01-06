<?php

namespace App\Http\Controllers;

use App\Models\kod_daerah;
use App\Models\kod_negeri;
use Illuminate\Http\Request;
use DB;

class KodDaerahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getNegeri(Request $request){
        // dd('masuk');
        $iNegeri = [];
        $iN = kod_daerah::where('idNegeri',$request->id)->get();
        foreach($iN as $kod){
            $iNegeri['iNeg'][] = $kod;
        }
        echo json_encode($iNegeri);
        exit();
    }
    public function getNegeri2(Request $request){
        // dd('masuk');
        $iNegeri2 = [];
        $iN = kod_daerah::where('idNegeri',$request->id)->get();
        foreach($iN as $kod){
            $iNegeri2['iNeg'][] = $kod;
        }
        echo json_encode($iNegeri2);
        exit();
    }
    public function index(Request $request)
    {
        $kod_daerah = kod_daerah::all();
        $kod_negeri = kod_negeri::all();

        return view('kod_daerah.index',[
            'kod_daerah'=>$kod_daerah,
            'kod_daerah1'=>$kod_negeri,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kod_daerah.index');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('ssss');
        $kod_daerah = new kod_daerah();
        $kod_daerah->kod = $request->kod;
        $kod_daerah->idNegeri = $request->idNegeri;
        $kod_daerah->nama = $request->nama;

        $kod_daerah->save();
        return redirect('/kod_daerah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kod_daerah  $kod_daerah
     * @return \Illuminate\Http\Response
     */
    public function show(kod_daerah $kod_daerah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kod_daerah  $kod_daerah
     * @return \Illuminate\Http\Response
     */
    public function edit(kod_daerah $kod_daerah)
    {
        // dd($kod_daerah);

        // $kod_daerah = kod_daerah::where('id', $kod_daerah)->first();

        // $kod_daerah = kod_daerah::all();
        $kod_negeri = kod_negeri::all();


        return view('kod_daerah.edit',[
            'kod_daerah'=>$kod_daerah,
            'kod_daerah1'=>$kod_negeri,
            // 'kod_daerah1'=>$kod_negeri,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kod_daerah  $kod_daerah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kod_daerah $kod_daerah)
    {
        $kod_daerah->idNegeri = $request->idNegeri;
        $kod_daerah->nama = $request->nama;
        $kod_daerah->kod = $request->kod;

        $kod_daerah->save();
        return redirect('/kod_daerah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kod_daerah  $kod_daerah
     * @return \Illuminate\Http\Response
     */
    public function destroy(kod_daerah $kod_daerah)
    {
        $kod_daerah->delete();
        return redirect('/kod_daerah')
        ->with('success', 'deleted successfully');
        //
    }
    public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        DB::table("sw_menu_details")->whereIn('id',explode(",",$ids))->delete();
        return response()->json(['success'=>"Products Deleted successfully."]);
    }
}
