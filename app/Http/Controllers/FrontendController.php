<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('layouts.frontend.index');
    }
    public function profilkota(){
        return view('layouts.frontend.profilkota');
    }
    public function sejarah(){
        return view('layouts.frontend.sejarahkota');
    }
}