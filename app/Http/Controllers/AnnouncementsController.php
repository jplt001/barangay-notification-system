<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB,Auth;
class AnnouncementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $side_bar = DB::table('user_access')
                    ->join('side_bar', 'user_access.side_bar_id', '=', 'side_bar.id')
                    ->where('position_id', Auth::user()->position_id)
                    ->get();
                    

        return view('announcements.index')->with(['side_active'=>'announcements', 'side_bars'=>$side_bar]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('announcements.create');
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
        // pre($request->all());
        $insert = [];
        $when = date('l, F d', strtotime($request->get('whenDate')))." at ".date('h:i A', strtotime($request->get('whenTime')));
        
        $insert['title'] = "Announcements";
        $insert['content'] = "<b>Who:</b> ".$request->get('who')."<br><b>What:</b> ".$request->get('what')."<br><b>When:</b> ".$when."<br><b>Where:</b> ".$request->get('where');
        $insert['type_of_bulliten_board'] = $request->get('type_of_bulliten_board');
        
        $file = $request->file('thumbnail');
        $fileExt = null;

        $thumb = null;
        // $file = $request->photo();
        if($request->hasFile('thumbnail')){
            $thumb .= base64_encode(file_get_contents($file->getRealPath()));
            $fileExt = $file->extension();
        }

        $insert['thumbnail'] = $thumb;
        $insert['thumbnail_ext'] = $fileExt;

        // pre($insert);
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
        $announcement = DB::table('announcements')->find($id);

        return view('announcements.view')->with(['details'=>$announcement]);
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
