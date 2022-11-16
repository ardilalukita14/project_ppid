<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewAdminController extends Controller
{
    public function dashboard(){
        return view('backend.admin.index');
    }
}
