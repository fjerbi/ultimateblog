<?php

namespace fjerbi\ultimateblog\Http\Controllers;

use App\User;
use fjerbi\ultimateblog\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      $this->middleware('auth')->except('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        return view('ultimateblog::home');
    }

    public function user($id){
        $user = User::find($id);
        return view('ultimateblog::user', compact('user'));
    }

    public function ajax(Request $request){
        $user = User::find($request->user_id);
        $response = auth()->user()->toggleFollow($user);
        return response()->json(['success'=> $response]);
    }

}
