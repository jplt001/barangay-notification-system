<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth,DB;
class AchievementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //        
        return redirect('bulletin-board');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $side_bar = DB::table('user_access')
                    ->join('side_bar', 'user_access.side_bar_id', '=', 'side_bar.id')
                    ->where('position_id', Auth::user()->position_id)
                    ->get();

        return view('announcements.create-achievments')->with(['side_active'=>'announcements', 'side_bars'=>$side_bar]);
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
        // $thumbnail = $request->file('thumbnail');
        // $file_name = date('YmdHis').md5(microtime())."_".$thumbnail->getClientOriginalName();
        //  $url = url('/uploads/')."/".$file_name;
        //  $destinationPath = __DIR__."/../../../public/uploads/";
        $insert['thumbnail'] = $thumb;
        $insert['thumbnail_ext'] = $fileExt;
        $insert['added_by']  = Auth::user()->id;
        // $thumbnail->move($destinationPath, $file_name);


        unset($insert['_token']);
        DB::table('announcements')->insert($insert);

        return redirect('/bulletin-board')->with('success', 'test');
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
