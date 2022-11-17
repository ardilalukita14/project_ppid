<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use Session;

class ProfilePPIDController extends Controller
{

    public function profileppid() {
        $profile = Profile::where('kategori_profile', '=', 'profil-ppid')->first();
        $judul = "Update Profil PPID";
        return view('admin.profile.form', compact('profile', 'judul'));
    }

    public function visimisippid() {
        $profile = Profile::where('kategori_profile', '=', 'visi-misi-ppid')->first();
        $judul = "Update Visi Misi PPID";
        return view('admin.profile.form', compact('profile', 'judul'));
    }

    public function baganstruktur() {
        $profile = Profile::where('kategori_profile', '=', 'bagan-struktur-ppid')->first();
        $judul = "Update Bagan Struktur PPID";
        return view('admin.profile.form', compact('profile', 'judul'));
    }

    public function sop() {
        $profile = Profile::where('kategori_profile', '=', 'sop-ppid')->first();
        $judul = "Update SOP PPID";
        return view('admin.profile.form', compact('profile', 'judul'));
    }

    public function tupoksippid() {
        $profile = Profile::where('kategori_profile', '=', 'tupoksi-ppid')->first();
        $judul = "Update Tupoksi PPID";
        return view('admin.profile.form', compact('profile', 'judul'));
    }

    public function skppid() {
        $profile = Profile::where('kategori_profile', '=', 'sk-ppid')->first();
        $judul = "Update SK PPID";
        return view('admin.profile.form', compact('profile', 'judul'));
    }

    public function perwalppid() {
        $profile = Profile::where('kategori_profile', '=', 'perwal-ppid')->first();
        $judul = "Update Perwal PPID";
        return view('admin.profile.form', compact('profile', 'judul'));
    }

    public function maklumatppid() {
        $profile = Profile::where('kategori_profile', '=', 'maklumat-ppid')->first();
        $judul = "Update Maklumat PPID";
        return view('admin.profile.form', compact('profile', 'judul'));
    }

    public function jampelayanan() {
        $profile = Profile::where('kategori_profile', '=', 'jam-pelayanan')->first();
        $judul = "Update Jam Pelayanan";
        return view('admin.profile.form', compact('profile', 'judul'));
    }

    public function skpublik() {
        $profile = Profile::where('kategori_profile', '=', 'sk-daftar-informasi-publik')->first();
        $judul = "Update Daftar SK Informasi Publik";
        return view('admin.profile.form', compact('profile', 'judul'));
    }

    public function skdikecualikan() {
        $profile = Profile::where('kategori_profile', '=', 'sk-daftar-informasi-dikecualikan')->first();
        $judul = "Update Daftar SK Informasi Dikecualikan";
        return view('admin.profile.form', compact('profile', 'judul'));
    }

    public function store(Request $request){
        $profile = Profile::where('kategori_profile', '=', $request->kategori_profile)->first();

        if($profile != null ){
            $post_data = [
                'deskripsi' => $request->profile,
                'user_id' =>Auth::id(),
            ];

            $update_profile = Profile::findorfail($profile->id);
            $update_profile->update($post_data);
        }

        if($profile->kategori_profile == "profil-ppid"){
            Session::flash('success','Sukses Update Data');
            return redirect()->route('profile.ppid.index');
        }
        elseif($profile->kategori_profile == "visi-misi-ppid"){
            Session::flash('success','Sukses Update Data');
            return redirect()->route('visimisi.ppid.index');
        }
        elseif($profile->kategori_profile == "bagan-struktur-ppid"){
            Session::flash('success','Sukses Update Data');
            return redirect()->route('bagan.struktur.index');
        }
        elseif($profile->kategori_profile == "sop-ppid"){
            Session::flash('success','Sukses Update Data');
            return redirect()->route('sop.index');
        }
        elseif($profile->kategori_profile == "tupoksi-ppid"){
            Session::flash('success','Sukses Update Data');
            return redirect()->route('tupoksi.ppid.index');
        }
        elseif($profile->kategori_profile == "sk-ppid"){
            Session::flash('success','Sukses Update Data');
            return redirect()->route('sk.ppid.index');
        }
        elseif($profile->kategori_profile == "perwal-ppid"){
            Session::flash('success','Sukses Update Data');
            return redirect()->route('perwal.ppid.index');
        }
        elseif($profile->kategori_profile == "maklumat-ppid"){
            Session::flash('success','Sukses Update Data');
            return redirect()->route('maklumat.ppid.index');
        }
        elseif($profile->kategori_profile == "jam-pelayanan"){
            Session::flash('success','Sukses Update Data');
            return redirect()->route('jam.pelayanan.index');
        }
        elseif($profile->kategori_profile == "sk-daftar-informasi-publik"){
            Session::flash('success','Sukses Update Data');
            return redirect()->route('sk.publik.index');
        }
        elseif($profile->kategori_profile == "sk-daftar-informasi-dikecualikan"){
            Session::flash('success','Sukses Update Data');
            return redirect()->route('sk.dikecualikan.index');
        }
    }
}
