<?php

namespace App\Http\Controllers;

use App\Models\kod_kategori_syarikat;
use Illuminate\Http\Request;

class KodKategoriSyarikatController extends Controller
{
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
     * @param  \App\Models\kod_kategori_syarikat  $kod_kategori_syarikat
     * @return \Illuminate\Http\Response
     */
    public function show(kod_kategori_syarikat $kod_kategori_syarikat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kod_kategori_syarikat  $kod_kategori_syarikat
     * @return \Illuminate\Http\Response
     */
    public function edit(kod_kategori_syarikat $kod_kategori_syarikat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kod_kategori_syarikat  $kod_kategori_syarikat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kod_kategori_syarikat $kod_kategori_syarikat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kod_kategori_syarikat  $kod_kategori_syarikat
     * @return \Illuminate\Http\Response
     */
    public function destroy(kod_kategori_syarikat $kod_kategori_syarikat)
    {
        $kod_kategori_syarikat->delete();
        return redirect('/kod_kategori_syarikat')
        ->with('success', 'deleted successfully');
    }
}
