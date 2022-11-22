<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use Illuminate\Support\Str;
use Session;

class ProfileController extends Controller
{

    public function madiunprofile() {
        $profile = Profile::where('kategori_profile', '=', 'profil-kota-madiun')->first();
        $judul = "Update Profil Kota Madiun";
        return view('admin.profile.form', compact('profile', 'judul'));
    }

    public function sejarah() {
        $profile = Profile::where('kategori_profile', '=', 'sejarah-kota-madiun')->first();
        $judul = "Update Sejarah Kota Madiun";
        return view('admin.profile.form', compact('profile', 'judul'));
    }

    public function geografis() {
        $profile = Profile::where('kategori_profile', '=', 'letak-geografis')->first();
        $judul = "Update Letak Geografis";
        return view('admin.profile.form', compact('profile', 'judul'));
    }

    public function profilepemerintah() {
        $profile = Profile::where('kategori_profile', '=', 'profil-pemerintah')->first();
        $judul = "Update Profil Pemerintah";
        return view('admin.profile.form', compact('profile', 'judul'));
    }

    public function profilepejabat() {
        $profile = Profile::where('kategori_profile', '=', 'profil-pejabat')->first();
        $judul = "Update Profil Pejabat";
        return view('admin.profile.form', compact('profile', 'judul'));
    }

    public function lhkpnpejabat() {
        $profile = Profile::where('kategori_profile', '=', 'lhkpn-pejabat')->first();
        $judul = "Update LHKPN Pejabat";
        return view('admin.profile.form', compact('profile', 'judul'));
    }

    public function visimisi() {
        $profile = Profile::where('kategori_profile', '=', 'visi-misi')->first();
        $judul = "Update Visi Misi";
        return view('admin.profile.form', compact('profile', 'judul'));
    }

    public function strukturpemerintah() {
        $profile = Profile::where('kategori_profile', '=', 'struktur-organisasi-pemerintah')->first();
        $judul = "Update Struktur Organisasi Pemerintah";
        return view('admin.profile.form', compact('profile', 'judul'));
    }

    public function strukturunitkerja() {
        $profile = Profile::where('kategori_profile', '=', 'struktur-organisasi-unit-kerja')->first();
        $judul = "Update Struktur Organisasi Unit Kerja";
        return view('admin.profile.form', compact('profile', 'judul'));
    }

    public function tupoksipemerintah() {
        $profile = Profile::where('kategori_profile', '=', 'tupoksi-pemerintah')->first();
        $judul = "Update Tupoksi Pemerintah";
        return view('admin.profile.form', compact('profile', 'judul'));
    }

    public function tupoksiunitkerja() {
        $profile = Profile::where('kategori_profile', '=', 'tupoksi-unit-kerja')->first();
        $judul = "Update Tupoksi Unit Kerja";
        return view('admin.profile.form', compact('profile', 'judul'));
    }

    public function agenda() {
        $profile = Profile::where('kategori_profile', '=', 'agenda-kerja-kegiatan-pimpinan')->first();
        $judul = "Update Agenda Kerja Kegiatan Pimpinan";
        return view('admin.profile.form', compact('profile', 'judul'));
    }

    public function store(Request $request){

        $profile = Profile::where('kategori_profile', '=', $request->kategori_profile)->first();
        
        $profil = Profile::findorfail($profile->id);
        $profil ->kategori_profile = $request->kategori_profile;
        $profil ->title = $request->title;
        $profil->slug = Str::slug($profil->title);
        $profil->deskripsi = $request->deskripsi;
        $profil->save();

        if($profile->kategori_profile == "profil-kota-madiun"){
            Session::flash('success','Sukses Update Data');
            return redirect()->route('madiunprofile.index');
        }
        elseif($profile->kategori_profile == "sejarah-kota-madiun"){
            Session::flash('success','Sukses Update Data');
            return redirect()->route('sejarah.index');
        }
        elseif($profile->kategori_profile == "letak-geografis"){
            Session::flash('success','Sukses Update Data');
            return redirect()->route('geografis.index');
        }
        elseif($profile->kategori_profile == "profil-pemerintah"){
            Session::flash('success','Sukses Update Data');
            return redirect()->route('profil.pemerintah.index');
        }
        elseif($profile->kategori_profile == "profil-pejabat"){
            Session::flash('success','Sukses Update Data');
            return redirect()->route('profil.pejabat.index');
        }
        elseif($profile->kategori_profile == "lkhpn-pejabat"){
            Session::flash('success','Sukses Update Data');
            return redirect()->route('lhkpn.index');
        }
        elseif($profile->kategori_profile == "visi-misi"){
            Session::flash('success','Sukses Update Data');
            return redirect()->route('visimisi.index');
        }
        elseif($profile->kategori_profile == "struktur-organisasi-pemerintah"){
            Session::flash('success','Sukses Update Data');
            return redirect()->route('struktur.pemerintah.index');
        }
        elseif($profile->kategori_profile == "struktur-organisasi-unit-kerja"){
            Session::flash('success','Sukses Update Data');
            return redirect()->route('struktur.unitkerja.index');
        }
        elseif($profile->kategori_profile == "tupoksi-pemerintah"){
            Session::flash('success','Sukses Update Data');
            return redirect()->route('tupoksi.pemerintah.index');
        }
        elseif($profile->kategori_profile == "tupoksi-unit-kerja"){
            Session::flash('success','Sukses Update Data');
            return redirect()->route('tupoksi.unitkerja.index');
        }
        elseif($profile->kategori_profile == "agenda-kerja-kegiatan-pimpinan"){
            Session::flash('success','Sukses Update Data');
            return redirect()->route('agenda.index');
        }
    }
}
