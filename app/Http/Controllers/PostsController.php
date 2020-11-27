<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth' , ['except' => ['show', 'index', 'edit']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // This is eloquent Method "$posts = Post::all(); $posts = Post::orderBy('id', 'desc')->get();"
        
        //Lets check if data is synced with DB with get method "return Post::where('id','2')->get();"

        //This Is Query Method and You have to use DB first "$posts = DB::select('SELECT * FROM posts');"

        //This is for Page limit "$posts =Post::orderBy('id', 'desc')->take(10)->get();"
        
        //$posts = Post::orderBy('id', 'desc')->get();
        
        //to prevent go first page of list
        // $posts = DB::table('posts')->paginate(1);
        // return view('posts.index', ['posts' => $posts]);

        $posts = Post::orderBy('id', 'asc')->paginate(2);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required'
        ]);

        // POST CREATE REQUEST
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->save();
        return redirect('/posts')->with('flash_message' , 'Post Created');
        //return redirect()->back()->with('success', 'Saved!'); If u dont want to go back
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return Post::find($id); to check conn b/w Model and view use this\
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        // Check correct user
        if(Auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error', 'Unautherised');    
        }
        return view('posts.edit')->with('post', $post);
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
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required'
        ]);

        // POST UPDATE REQUEST
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/posts')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        // Check correct user
        if(Auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error', 'dash');    
        }
        $post->delete();
        return redirect('/posts')->with('delete', 'Post Removed');
    }
}
