<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\InformasiPPID;
use Session;

class InformasiPPIDController extends Controller
{
    public function index()
    {
        $informasi_ppid = InformasiPPID::all();
        $judul = "Daftar Informasi Publik Publik PPID Pelaksana";
        return view('admin.informasi_publik.daftar_informasi.pelaksana.index', compact('informasi_ppid', 'judul'));
    }

    public function create()
    {
        $informasi_ppid = InformasiPPID::all()->first();
        $judul = "Tambah Daftar Informasi Publik PPID Pelaksana";
        return view('admin.informasi_publik.daftar_informasi.pelaksana.create', compact('informasi_ppid', 'judul'));
    }

    public function store(Request $request)
    {
        $informasi_ppid = new InformasiPPID;
        $informasi_ppid->ppid = $request->ppid;
        $informasi_ppid->link = $request->link;
        $informasi_ppid->save();
        if ($informasi_ppid) {
            Session::flash('success','Daftar Informasi Publik PPID Pelaksana Berhasil Ditambahkan');
            return redirect()->route('informasi_publik.daftar_informasi.pelaksana.index');
        } else {
            Session::flash('failed','Daftar Informasi Publik PPID Pelaksana Gagal Ditambahkan');
            return redirect()->route('informasi_publik.daftar_informasi.pelaksana.index');
        }
    }

    public function edit($id){
        $informasi_ppid = InformasiPPID::find($id);
        $judul = "Update Daftar Informasi Publik PPID Pelaksana";
        return view('admin.informasi_publik.daftar_informasi.pelaksana.edit',compact('informasi_ppid', 'judul'));
    }

    public function update(Request $request, $id)
    {
            $informasi_ppid = InformasiPPID::find($id);
            $informasi_ppid->ppid = $request->ppid;
            $informasi_ppid->link = $request->link;
            $informasi_ppid->save();

        if ($informasi_ppid) {
                Session::flash('update','Update Daftar Informasi Publik PPID Pelaksana Berhasil');
                return redirect()->route('informasi_publik.daftar_informasi.pelaksana.index');
            } else {
                Session::flash('failed','Update Daftar Informasi Publik PPID Pelaksana Gagal');
                return redirect()->route('informasi_publik.daftar_informasi.pelaksana.index');
            }
    }

    public function destroy($id) {
        InformasiPPID::find($id)->delete();
        Session::flash('delete','Daftar Informasi Publik PPID Pelaksana Berhasil Dihapus');
        return redirect()->route('informasi_publik.daftar_informasi.pelaksana.index');
    }


}
