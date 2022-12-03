<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('layouts.frontend.index');
    }
    public function index2(){
        return view('layouts.frontend2.index');
    }
    public function sejarah(){
        return view('layouts.frontend.sejarahkota');
    }
}
