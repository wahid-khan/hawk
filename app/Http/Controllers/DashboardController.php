<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Channel;
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
        
        // DB Connecttion require
        //$users = DB::connection('mysql')->select('SELECT * FROM users Where id' . '=' . $user_id);
        

        /*
        #Retrieving All Rows From A Table
        */
        // $users = DB::table('users')->get();
        // dd($users);

        /*
        #Retrieving A Single Row
        */
        // $users = DB::table('users')->first();
        // dd($users);
        
        /*
        #Retrieving A Single Row / Column From A Table
        */
        // $users = DB::table('users')
        // ->where('name', 'wahid')->first();
        // dd($users);

        /*
        #Retrieving A Single Value Column From A Table
        */
        // $users = DB::table('users')
        // ->where('name', 'wahid')->value('name');
        // dd($users);

        /*
        #etrieve a single row by its id
        */
        // $users = DB::table('users')->find(1);
        // dd($users);
        
        /*
        #Retrieve a single row by its id column value & u can call individual columns
        */
        // $users = DB::table('users')->find(1);
        // $name = $users->name;
        // dd($users->name, $users->email);

        /*
        #Retrieving A List Of Column Values
        */
        // $posts = DB::table('posts')->pluck('user_id', 'id'); //here 'id' is customer key column
        // $users = DB::table('users')->pluck('name', 'id');
        // dd($posts, $users);

        /*
        # Chunking Results from DB
        # is this how i updated the records
        */
        // DB::table('channels')->chunkById(100, function ($users) {
        //     foreach ($users as $user) {
        //         DB::table('channels')
        //             ->where('id', $user->id)
        //             ->update(['created_at' => '2020-12-06']);
        //     }
        // });

        // $users = DB::table('users')->paginate(15);
        //return auth()->user()->id;
        //return view('/dashboard')->with('users' , $user->posts);
         return view('/dashboard')->with('posts', $user->posts()->paginate(5));
        //return auth()->user()->id;
        
        
    }
}
