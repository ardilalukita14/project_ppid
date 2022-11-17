<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function register(){
        return view('auth.register');
    }
    public function dashboard(){
        return view('admin.index');
    }

    public function coba(){
        return view('admin.coba');
    }
}
