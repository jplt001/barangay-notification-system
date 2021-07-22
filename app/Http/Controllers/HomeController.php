<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB, Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
        $side_bar = DB::table('user_access')
                    ->join('side_bar', 'user_access.side_bar_id', '=', 'side_bar.id')
                    ->where('position_id', Auth::user()->position_id)
                    ->get();

        
        return view('home.index')->with(['side_active'=>'dashboard' ,'side_bars'=> $side_bar]);
    }
}
