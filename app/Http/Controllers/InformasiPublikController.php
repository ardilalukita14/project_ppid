<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\InformasiPublik;
use Session;

class InformasiPublikController extends Controller
{
    public function index()
    {
        $informasi_publik = InformasiPublik::all();
        $judul = "Daftar Informasi Publik 2022";
        return view('admin.informasi_publik.daftar_informasi.publik.index', compact('informasi_publik', 'judul'));
    }

    public function create()
    {
        $informasi_publik = InformasiPublik::all()->first();
        $judul = "Tambah Daftar Informasi Publik";
        return view('admin.informasi_publik.daftar_informasi.publik.create', compact('informasi_publik', 'judul'));
    }

    public function store(Request $request)
    {
        $informasi_publik = new InformasiPublik;
        $informasi_publik->daftar_informasi = $request->daftar_informasi;
        $informasi_publik->ringkasan = $request->ringkasan;
        $informasi_publik->jenis = $request->jenis;
        $informasi_publik->jangka_waktu = $request->jangka_waktu;
        $informasi_publik->link = $request->link;
        $informasi_publik->save();
        if ($informasi_publik) {
            Session::flash('success','Daftar Informasi Publik Berhasil Ditambahkan');
            return redirect()->route('informasi_publik.daftar_informasi.publik.index');
        } else {
            Session::flash('failed','Daftar Informasi Publik Gagal Ditambahkan');
            return redirect()->route('informasi_publik.daftar_informasi.publik.index');
        }
    }

    public function edit($id){
        $informasi_publik = InformasiPublik::find($id);
        $judul = "Update Daftar Informasi Publik";
        return view('admin.informasi_publik.daftar_informasi.publik.edit',compact('informasi_publik', 'judul'));
    }

    public function update(Request $request, $id)
    {
            $informasi_publik = InformasiPublik::find($id);
            $informasi_publik->daftar_informasi = $request->daftar_informasi;
            $informasi_publik->ringkasan = $request->ringkasan;
            $informasi_publik->jenis = $request->jenis;
            $informasi_publik->jangka_waktu = $request->jangka_waktu;
            $informasi_publik->link = $request->link;
            $informasi_publik->save();

        if ($informasi_publik) {
                Session::flash('update','Update Daftar Informasi Publik Berhasil');
                return redirect()->route('informasi_publik.daftar_informasi.publik.index');
            } else {
                Session::flash('failed','Update Daftar Informasi Publik Gagal');
                return redirect()->route('informasi_publik.daftar_informasi.publik.index');
            }
    }

    public function destroy($id) {
        InformasiPublik::find($id)->delete();
        Session::flash('delete','Daftar Informasi Publik Berhasil Dihapus');
        return redirect()->route('informasi_publik.daftar_informasi.publik.index');
    }


}
