<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB, Auth;
class UsersController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $positions = DB::table('positions')->get();
        
        $side_bar = DB::table('user_access')
                    ->join('side_bar', 'user_access.side_bar_id', '=', 'side_bar.id')
                    ->where('position_id', Auth::user()->position_id)
                    ->get();
        $members = DB::table('users')->get();
        return view('members.index')->with(['side_active'=>'barangay-members', 'positions'=>$positions, 'side_bars'=>$side_bar, 'members'=>$members]);
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
        $rules = ['required|unique:users'];
        //
        $insert = $request->all();
        unset($insert['_token']);
        $insert['name'] = $request->get('first_name')." ".$request->get('last_name');
        $insert['password'] =  bcrypt($insert['password']);
        $insert['created_by']= Auth::user()->id;

        
        DB::table('users')->insert($insert);

        return redirect('members')->with('success', 'New Barangay member has been successfully  added.');
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
