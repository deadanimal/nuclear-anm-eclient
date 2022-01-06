<?php

namespace App\Http\Controllers;

use App\Models\sw_menu_detail;
use App\Models\sw_menu_main;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SwMenuDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sw_menu_detail = sw_menu_detail::all();
        $sw_menu_main = sw_menu_main::all();

        return view('sw_menu_detail.index',[
            'sw_menu_detail'=>$sw_menu_detail,
            'sw_menu_detail1'=>$sw_menu_main,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sw_menu_detail.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sw_menu_detail = new sw_menu_detail();
        $sw_menu_detail->mm_id = $request->mm_id;
        $sw_menu_detail->md_bil = $request->md_bil;
        $sw_menu_detail->md_href = $request->md_href;
        $sw_menu_detail->md_tajuk = $request->md_tajuk;
        $sw_menu_detail->md_flagaktif = $request->md_flagaktif;

        $sw_menu_detail->save();
        return redirect('/sw_menu_detail');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sw_menu_detail  $sw_menu_detail
     * @return \Illuminate\Http\Response
     */
    public function show(sw_menu_detail $sw_menu_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sw_menu_detail  $sw_menu_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(sw_menu_detail $sw_menu_detail)
    {
        return view('sw_menu_detail.edit',[
            'sw_menu_detail' => $sw_menu_detail,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sw_menu_detail  $sw_menu_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sw_menu_detail $sw_menu_detail)
    {
        $sw_menu_detail->mm_id = $request->mm_id;
        $sw_menu_detail->md_bil = $request->md_bil;
        $sw_menu_detail->md_href = $request->md_href;
        $sw_menu_detail->md_tajuk = $request->md_tajuk;
        $sw_menu_detail->md_flagaktif = $request->md_flagaktif;

        $sw_menu_detail->save();
        return redirect('/sw_menu_detail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sw_menu_detail  $sw_menu_detail
     * @return \Illuminate\Http\Response
     */
    // public function destroy(sw_menu_detail $sw_menu_detail)
    public function destroy($id)
    {
        // $sw_menu_detail->delete();
        // return redirect('sw_menu_detail')
        // ->with('success','deleted successfully');

        DB::table("sw_menu_detail")->delete($id);
    	return response()->json(['success'=>"Product Deleted successfully.", 'tr'=>'tr_'.$id]);
    }
    public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        DB::table("sw_menu_details")->whereIn('id',explode(",",$ids))->delete();
        return response()->json(['success'=>"Products Deleted successfully."]);
    }
    
}
