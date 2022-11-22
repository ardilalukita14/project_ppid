<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\InformasiBerkala;
use Session;

class InformasiBerkalaController extends Controller
{
    public function index()
    {
        $informasi_berkala = InformasiBerkala::all();
        $judul = "Daftar Informasi Secara Berkala";
        return view('admin.informasi_publik.berkala.index', compact('informasi_berkala', 'judul'));
    }

    public function create()
    {
        $informasi_berkala = InformasiBerkala::all()->first();
        $judul = "Tambah Daftar Informasi Secara Berkala";
        return view('admin.informasi_publik.berkala.create', compact('informasi_berkala', 'judul'));
    }

    public function store(Request $request)
    {
        $informasi_berkala = new InformasiBerkala;
        $informasi_berkala->judul = $request->judul;
        $informasi_berkala->slug = $request->slug;
        $informasi_berkala->isi = $request->isi;
        $informasi_berkala->save();
        if ($informasi_berkala) {
            Session::flash('success','Daftar Informasi Secara Berkala Berhasil Ditambahkan');
            return redirect()->route('informasi_publik.berkala.index');
        } else {
            Session::flash('failed','Daftar Informasi Secara Berkala Gagal Ditambahkan');
            return redirect()->route('informasi_publik.berkala.index');
        }
    }

    public function edit($id){
        $informasi_berkala = InformasiBerkala::find($id);
        $judul = "Update Daftar Informasi Secara Berkala";
        return view('admin.informasi_publik.berkala.edit',compact('informasi_berkala', 'judul'));
    }

    public function update(Request $request, $id)
    {
            $informasi_berkala = InformasiBerkala::find($id);
            $informasi_berkala->judul = $request->judul;
            $informasi_berkala->slug = $request->slug;
            $informasi_berkala->isi = $request->isi;
            $informasi_berkala->save();

        if ($informasi_berkala) {
                Session::flash('update','Update Daftar Informasi Secara Berkala Berhasil');
                return redirect()->route('informasi_publik.berkala.index');
            } else {
                Session::flash('failed','Update Daftar Informasi Secara Berkala Gagal');
                return redirect()->route('informasi_publik.berkala.index');
            }
    }

    public function destroy($id) {
        InformasiBerkala::find($id)->delete();
        Session::flash('delete','Daftar Informasi Secara Berkala Berhasil Dihapus');
        return redirect()->route('informasi_publik.berkala.index');
    }


}
