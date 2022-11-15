<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use Session;

class KategoriProfileController extends Controller
{
    
    public function index() {
        $kategori = Kategori::all();
        return view('admin.kategori.index', compact('kategori'));
    }

    public function create() {
        return view('admin.kategori.formkategori');
    }

    public function store(Request $request)
    {
        $kategori = new Kategori;
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->status = $request->status;
        $kategori->tanggal = date('Y-m-d');
        $kategori->save();
        if ($kategori) {
            Session::flash('success','Sukses Tambah Data');
            return redirect()->route('kategori.index');
        } else {
            Session::flash('success','Gagal Tambah Data');
            return redirect()->route('kategori.index');
        }
    }

    public function edit($id)
    {
        $kategori = Kategori::find($id);
        return view('admin.kategori.edit',compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $kategori = Kategori::find($id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->status = $request->status;
        $kategori->tanggal = date('Y-m-d');
        $kategori->save();
        if ($kategori) {
            Session::flash('success','Sukses Update Data');
            return redirect()->route('kategori.index');
        } else {
            Session::flash('success','Gagal Update Data');
            return redirect()->route('kategori.index');
        }
    }

    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id)->delete();
        if ($kategori) {
            Session::flash('success','Sukses Hapus Data');
            return redirect()->route('kategori.index');
        } else {
            Session::flash('success','Gagal Hapus Data');
            return redirect()->route('kategori.index');
        }
    }
}
