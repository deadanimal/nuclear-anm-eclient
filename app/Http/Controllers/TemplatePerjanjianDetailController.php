<?php

namespace App\Http\Controllers;

use App\Models\template_perjanjian_detail;
use Illuminate\Http\Request;
use DB;

class TemplatePerjanjianDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $template_perjanjian_detail = template_perjanjian_detail::all();

        return view('template_perjanjian_detail.index',[
            'template_perjanjian_detail' => $template_perjanjian_detail,
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
        $template_perjanjian_detail = new template_perjanjian_detail();
        $template_perjanjian_detail->tpd_urutan = $request->tpd_urutan;
        $template_perjanjian_detail->tpd_level = $request->tpd_level;
        $template_perjanjian_detail->tpd_bil = $request->tpd_bil;
        $template_perjanjian_detail->tpd_keterangan = $request->tpd_keterangan;

        $template_perjanjian_detail->save();
        return redirect('/template_perjanjian_detail');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\template_perjanjian_detail  $template_perjanjian_detail
     * @return \Illuminate\Http\Response
     */
    public function show(template_perjanjian_detail $template_perjanjian_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\template_perjanjian_detail  $template_perjanjian_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(template_perjanjian_detail $template_perjanjian_detail)
    {

        return view('template_perjanjian_detail.edit',[
            'template_perjanjian_detail'=>$template_perjanjian_detail,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\template_perjanjian_detail  $template_perjanjian_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, template_perjanjian_detail $template_perjanjian_detail)
    {
        $template_perjanjian_detail->tpd_urutan = $request->tpd_urutan;
        $template_perjanjian_detail->tpd_level = $request->tpd_level;
        $template_perjanjian_detail->tpd_bil = $request->tpd_bil;
        $template_perjanjian_detail->tpd_keterangan = $request->tpd_keterangan;

        $template_perjanjian_detail->save();
        return redirect('/template_perjanjian_main');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\template_perjanjian_detail  $template_perjanjian_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(template_perjanjian_detail $template_perjanjian_detail)
    {
        //
    }
    public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        DB::table("template_perjanjian_details")->whereIn('id',explode(",",$ids))->delete();
        return response()->json(['success'=>"Products Deleted successfully."]);
    }
}
