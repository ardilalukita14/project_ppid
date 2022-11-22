<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;

class MainController extends Controller
{
   public function profil_ppid() {
    
    $profile = Profile::where('kategori_profile', '=', 'profil-ppid')->first();
    return view('user.profile.ppid', compact('profile'));

    }
}

