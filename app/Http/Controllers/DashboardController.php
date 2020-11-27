<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use DB;
class DashboardController extends Controller
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
        $user_id =auth()->user()->id;
        $user = User::find($user_id);
        // $users = DB::table('users')->paginate(15);
        //return auth()->user()->id;
        //return view('/dashboard')->with('users' , $user->posts);
        return view('/dashboard')->with('posts', $user->posts()->paginate(5));
        //return auth()->user()->id;
        
    }
}
