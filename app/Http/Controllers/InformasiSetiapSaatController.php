<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\InformasiSetiapSaat;
use Illuminate\Support\Str;
use Session;

class InformasiSetiapSaatController extends Controller
{
    public function index()
    {
        $informasi_setiap_saat = InformasiSetiapSaat::all();
        $judul = "Daftar Informasi Setiap Saat";
        return view('admin.informasi_publik.setiap_saat.index', compact('informasi_setiap_saat', 'judul'));
    }

    public function create()
    {
        $informasi_setiap_saat = InformasiSetiapSaat::all()->first();
        $judul = "Tambah Daftar Informasi Setiap Saat";
        return view('admin.informasi_publik.setiap_saat.create', compact('informasi_setiap_saat', 'judul'));
    }

    public function store(Request $request)
    {
        $informasi_setiap_saat = new InformasiSetiapSaat;
        $informasi_setiap_saat->judul = $request->judul;
        $informasi_setiap_saat->slug = Str::slug($informasi_setiap_saat->judul);
        $informasi_setiap_saat->isi = $request->isi;
        $informasi_setiap_saat->save();
        if ($informasi_setiap_saat) {
            Session::flash('success','Daftar Informasi Setiap Saat Berhasil Ditambahkan');
            return redirect()->route('informasi_publik.setiap_saat.index');
        } else {
            Session::flash('failed','Daftar Informasi Setiap Saat Gagal Ditambahkan');
            return redirect()->route('informasi_publik.setiap_saat.index');
        }
    }

    public function edit($id){
        $informasi_setiap_saat = InformasiSetiapSaat::find($id);
        $judul = "Update Daftar Informasi Setiap Saat";
        return view('admin.informasi_publik.setiap_saat.edit',compact('informasi_setiap_saat', 'judul'));
    }

    public function update(Request $request, $id)
    {
            $informasi_setiap_saat = InformasiSetiapSaat::find($id);
            $informasi_setiap_saat->judul = $request->judul;
            $informasi_setiap_saat->slug = Str::slug($informasi_setiap_saat->judul);
            $informasi_setiap_saat->isi = $request->isi;
            $informasi_setiap_saat->save();

        if ($informasi_setiap_saat) {
                Session::flash('update','Update Daftar Informasi Setiap Saat Berhasil');
                return redirect()->route('informasi_publik.setiap_saat.index');
            } else {
                Session::flash('failed','Update Daftar Informasi SetiapSaat Gagal');
                return redirect()->route('informasi_publik.setiap_saat.index');
            }
    }

    public function destroy($id) {
        InformasiSetiapSaat::find($id)->delete();
        Session::flash('delete','Daftar Informasi Setiap Saat Berhasil Dihapus');
        return redirect()->route('informasi_publik.setiap_saat.index');
    }


}
