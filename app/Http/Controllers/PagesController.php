<?php

namespace App\Http\Controllers;

USE Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth' , ['except' => ['index']]);
    }
    public function hawk(){
        $title = "What is HAWK!";
        //WITH METHOD
        return view('pages.hawk')->with('title', $title);
    }
    public function index(){
        $title = "Welcome to Main Page!";
        //WITH METHOD
        return view('pages.index')->with('title', $title);
    }
    public function about(){
        $title = "Welcome To About";
        //COMPACT METHOD
        return view('pages.about', compact('title'));
    }
    public function services(){
        //If we pass multiple data with view use array method
        $data = array(
            'title' => 'Services',
            'services' => ['Dimand','Gold','Silver']
        );
        return view('pages.services')->with($data);
    }
}
