<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use Session;

class ProfileController extends Controller
{

    public function madiunprofile() {
        $profile = Profile()::orderBy('created_at','ASC')->first();
        return view('admin.profile.form', compact('profile'));
    }

    public function store(Request $request){
        $profil = Profile::orderBy('created_at','ASC')->first();

        if($profil != null ){
            $post_data = [
                'deskripsi' => $request->profil,
                'user_id' =>Auth::id(),
            ];

            $update_profil = Profil::findorfail($profil->id);
            $update_profil->update($post_data);
        }
    }
}
