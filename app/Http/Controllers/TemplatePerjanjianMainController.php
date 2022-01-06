<?php

namespace App\Http\Controllers;

use App\Models\template_perjanjian_detail;
use App\Models\template_perjanjian_main;
use Illuminate\Http\Request;
use DB;

class TemplatePerjanjianMainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // dd('mmm');
        $template_perjanjian_main = template_perjanjian_main::all();
        // $template_perjanjian_main1 = template_perjanjian_detail::all();

        return view('template_perjanjian_main.index',[
            'template_perjanjian_main'=>$template_perjanjian_main,
            // 'template_perjanjian_main1'=>$template_perjanjian_main1
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
        $template_perjanjian_main = new template_perjanjian_main();
        $template_perjanjian_main->tpm_id = $request->tpm_id;
        $template_perjanjian_main->tpm_nama = $request->tpm_nama;

        $template_perjanjian_main->save();
        return redirect('/template_perjanjian_main');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\template_perjanjian_main  $template_perjanjian_main
     * @return \Illuminate\Http\Response
     */
    public function getDetailTemplate(Request $request)
    {
        $searchNama = [];

        if (isset($request->tpm_id)){
            $searchNama = template_perjanjian_detail::where('tpm_id',$request->tpm_id)
            ->get();
        }
        return view('template_perjanjian_main.carian',[
            'template_perjanjian_main'=>$searchNama,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\template_perjanjian_main  $template_perjanjian_main
     * @return \Illuminate\Http\Response
     */
    public function edit(template_perjanjian_main $template_perjanjian_main)
    {
                return view('template_perjanjian_main.edit',[
            'template_perjanjian_main'=>$template_perjanjian_main,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\template_perjanjian_main  $template_perjanjian_main
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, template_perjanjian_main $template_perjanjian_main)
    {
        $template_perjanjian_main->tpm_id = $request->tpm_id;
        $template_perjanjian_main->tpm_nama = $request->tpm_nama;

        $template_perjanjian_main->save();
        return redirect('/template_perjanjian_main');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\template_perjanjian_main  $template_perjanjian_main
     * @return \Illuminate\Http\Response
     */
    public function destroy(template_perjanjian_main $template_perjanjian_main)
    {
        $template_perjanjian_main->delete();
        return redirect('/template_perjanjian_main')
        ->with('success', 'deleted successfully');
    }
    public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        DB::table("template_perjanjian_mains")->whereIn('id',explode(",",$ids))->delete();
        return response()->json(['success'=>"Products Deleted successfully."]);
    }
}
