<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Models\Berkas;


class MainController extends Controller
{
    public function profil_ppid() {
    
        $profile = Profile::where('kategori_profile', '=', 'profil-ppid')->first();
        $berkas = Berkas::where('profile_id', '=', '13')->first();
        return view('user.profile.ppid', compact('profile', 'berkas'));

        }

    public function visimisi_ppid() {
    
        $profile = Profile::where('kategori_profile', '=', 'visi-misi-ppid')->first();
        $berkas = Berkas::where('profile_id', '=', '14')->first();
        return view('user.profile.visimisi', compact('profile', 'berkas'));
    
        }
}

