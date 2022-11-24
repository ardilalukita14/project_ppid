<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\InformasiSertaMerta;
use Illuminate\Support\Str;
use Session;

class InformasiSertaMertaController extends Controller
{
    public function index()
    {
        $informasi_serta_merta = InformasiSertaMerta::all();
        $judul = "Daftar Informasi Serta Merta";
        return view('admin.informasi_publik.serta_merta.index', compact('informasi_serta_merta', 'judul'));
    }

    public function create()
    {
        $informasi_serta_merta = InformasiSertaMerta::all()->first();
        $judul = "Tambah Daftar Informasi Serta Merta";
        return view('admin.informasi_publik.serta_merta.create', compact('informasi_serta_merta', 'judul'));
    }

    public function store(Request $request)
    {
        $informasi_serta_merta = new InformasiSertaMerta;
        $informasi_serta_merta->judul = $request->judul;
        $informasi_serta_merta->slug = Str::slug($informasi_serta_merta->judul);
        $informasi_serta_merta->isi = $request->isi;
        $informasi_serta_merta->save();
        if ($informasi_serta_merta) {
            Session::flash('success','Daftar Informasi Serta Merta Berhasil Ditambahkan');
            return redirect()->route('informasi_publik.serta_merta.index');
        } else {
            Session::flash('failed','Daftar Informasi Serta Merta Gagal Ditambahkan');
            return redirect()->route('informasi_publik.serta_merta.index');
        }
    }

    public function edit($id){
        $informasi_serta_merta = InformasiSertaMerta::find($id);
        $judul = "Update Daftar Informasi Serta Merta";
        return view('admin.informasi_publik.serta_merta.edit',compact('informasi_serta_merta', 'judul'));
    }

    public function update(Request $request, $id)
    {
            $informasi_serta_merta = InformasiSertaMerta::find($id);
            $informasi_serta_merta->judul = $request->judul;
            $informasi_serta_merta->slug = Str::slug($informasi_serta_merta->judul);
            $informasi_serta_merta->isi = $request->isi;
            $informasi_serta_merta->save();

        if ($informasi_serta_merta) {
                Session::flash('update','Update Daftar Informasi Serta Merta Berhasil');
                return redirect()->route('informasi_publik.serta_merta.index');
            } else {
                Session::flash('failed','Update Daftar Informasi SertaMerta Gagal');
                return redirect()->route('informasi_publik.serta_merta.index');
            }
    }

    public function destroy($id) {
        InformasiSertaMerta::find($id)->delete();
        Session::flash('delete','Daftar Informasi Serta Merta Berhasil Dihapus');
        return redirect()->route('informasi_publik.serta_merta.index');
    }


}
