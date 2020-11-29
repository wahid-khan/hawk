<?php

namespace App\Http\Controllers;

use App\Channel;
use Illuminate\Http\Request;

class ChannelController extends Controller
{
    public function index()
    {
        $channels = Channel::all();

        // return view('channel.index')->with('channels', $channels);
        return view('channel.index', compact('channels'));
    }

    public function create()
    {
        // $channels = Channel::all();
        // $channels = Channel::orderBy('name', 'DESC')->get();
        $channels = Channel::orderBy('name')->get();
        return view('channel.create', compact('channels'));
    }
}
