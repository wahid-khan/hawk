<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KDSController extends Controller
{
    public function index(){
        return view('kds/index');
    }

    public function secondindex(){
        return view('kds/register');
    }
}
