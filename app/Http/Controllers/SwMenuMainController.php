<?php

namespace App\Http\Controllers;

use App\Models\sw_menu_main;
use Illuminate\Http\Request;

class SwMenuMainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sw_menu_main = sw_menu_main::all();

        return view('sw_menu_main.index',[
            'sw_menu_main'=>$sw_menu_main,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sw_menu_main.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('masuk');
        $sw_menu_main = new sw_menu_main();
        $sw_menu_main->mm_kod = $request->mm_kod;
        $sw_menu_main->mm_nama = $request->mm_nama;

        $sw_menu_main->save();
        return redirect('/sw_menu_main');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sw_menu_main  $sw_menu_main
     * @return \Illuminate\Http\Response
     */
    public function show(sw_menu_main $sw_menu_main)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sw_menu_main  $sw_menu_main
     * @return \Illuminate\Http\Response
     */
    public function edit(sw_menu_main $sw_menu_main)
    {
        // dd('masuk');
        return view('sw_menu_main.edit',[
            'sw_menu_main' => $sw_menu_main,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sw_menu_main  $sw_menu_main
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sw_menu_main $sw_menu_main)
    {
        $sw_menu_main->mm_kod = $request->mm_kod;
        $sw_menu_main->mm_nama = $request->mm_nama;

        $sw_menu_main->save();
        return redirect('/sw_menu_main');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sw_menu_main  $sw_menu_main
     * @return \Illuminate\Http\Response
     */
    public function destroy(sw_menu_main $sw_menu_main)
    {
        $sw_menu_main->delete();
        return redirect('sw_menu_main')
        ->with('success','deleted sucessfully');
    }
}
