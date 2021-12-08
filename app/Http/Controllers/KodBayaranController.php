<?php

namespace App\Http\Controllers;

use App\Models\kod_bayaran;
use Illuminate\Http\Request;

class KodBayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kod_bayaran = kod_bayaran::all();

        return view('kod_bayaran.index',[
            'kod_bayaran'=>$kod_bayaran
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kod_bayaran.index');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kod_bayaran = new kod_bayaran();
        $kod_bayaran->kod = $request->kod;
        $kod_bayaran->nama = $request->nama;

        $kod_bayaran->save();
        return redirect('/kod_bayaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kod_bayaran  $kod_bayaran
     * @return \Illuminate\Http\Response
     */
    public function show(kod_bayaran $kod_bayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kod_bayaran  $kod_bayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(kod_bayaran $kod_bayaran)
    {
        $kod_bayaran = kod_bayaran::all();

        return view('kod_bayaran.edit',[
            'kod_bayaran'=>$kod_bayaran,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kod_bayaran  $kod_bayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kod_bayaran $kod_bayaran)
    {
        $kod_bayaran->kod = $request->kod;
        $kod_bayaran->nama = $request->nama;

        $kod_bayaran->save();
        return redirect('/kod_bayaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kod_bayaran  $kod_bayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(kod_bayaran $kod_bayaran,$id)
    {
        $kod_bayaran = kod_bayaran::where('id', $kod_bayaran)->first();

        kod_bayaran::where('id',$id)->delete();
        return redirect('/kod_bayaran')
        ->with('success', 'post deleted successfully');
        //
    }
}
