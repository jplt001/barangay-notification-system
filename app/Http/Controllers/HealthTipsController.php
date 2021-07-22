<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB, Auth;
class HealthTipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $res = DB::table('health_tips')
                ->select('health_tips.*', 'users.name')
                ->join('users', 'health_tips.added_by', '=', 'users.id')
                ->orderBy('id', 'DESC')->get();
        $data = [];
        
        foreach ($res as $v) {
            $raw_data['id'] = $v->id;
            $raw_data['health_tip_title'] = $v->health_tip_title;
            $raw_data['posted_when'] = $v->added_when;
            $raw_data['added_by'] = $v->name;
            array_push($data, $raw_data);
        }

        $side_bar = DB::table('user_access')
                    ->join('side_bar', 'user_access.side_bar_id', '=', 'side_bar.id')
                    ->where('position_id', Auth::user()->position_id)
                    ->get();
        
        return view('health-tips.index')->with(['side_active'=>'healthtips', 'healthTips'=>$data, 'side_bars'=>$side_bar]);
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

        $file = $request->file('thumbnail');
        $fileExt = $file->extension();

        $thumb = null;
        // $file = $request->photo();
        if($request->file('thumbnail')->isValid()){
            $thumb .= base64_encode(file_get_contents($file->getRealPath()));
        }
        $insert = $request->all();
        $insert['thumbnail'] = $thumb;
        $insert['thumbnail_ext'] = $fileExt;
        $insert['added_by']  = Auth::user()->id;
        unset($insert['_token']);
        DB::table('health_tips')->insert($insert);

        return redirect('/health-tips')->with('success', 'test');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = DB::table('health_tips')->where('id', $id)->first();
        return view('health-tips.view')->with(['side_active'=>'healthtips' ,'details'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // return view('health-tips.view')->with(['side_active'=>'healthtips']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
