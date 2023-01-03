<?php

namespace App\Http\Controllers;
use App\Models\Pengajuan;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index(Request $request)
    {
        // if ($request->has('search')) { // Jika ingin melakukan pencarian judul
        //     $pengajuan = Pengajuan::where('nama', 'like', "%" . $request->search . "%")->paginate(5);
        // } else { // Jika tidak melakukan pencarian judul
        //     //fungsi eloquent menampilkan data menggunakan pagination
        //     $pengajuan = Pengajuan::orderBy('id', 'desc')->paginate(5); // Pagination menampilkan 5 data
        // }
        return view('user.informasipublik.pengajuan', compact('pengajuan'));
    }

    public function create()
    {
        return view('user.informasipublik.pengajuan');
    }

    public function store(Request $request) {
        $pengajuan = new pengajuan;
        $pengajuan->kode_permohonan = $request->kode_permohonan;
        $pengajuan->nik = $request->nik;
        $pengajuan->save();
        if ($pengajuan) {
            Session::flash('success','Pengajuan Keberatan Anda Berhasil Terkirim');
            return redirect()->route('user.informasipublik.pengajuan');
        } else {
            Session::flash('failed','Pengajuan Keberatan Anda Gagal Terkirim');
            return redirect()->route('user.informasipublik.pengajuan');
        }
    }

    // public function show($id)
    // {
    //     $pengajuan = Pengajuan::find($id);
    //     return view('admin.dashboard.pengajuan.show', compact('pengajuan'));
    // }

    // public function destroy($id)
    // {
    //     $pengajuan = Pengajuan::find($id);
    //     $pengajuan->delete();
    //     if ($pengajuan) {
    //         Session::flash('delete','Pengajuan Keberatan Anda Berhasil Dihapus');
    //         return redirect()->route('admin.dashboard.pengajuan.index');
    //     } else {
    //         Session::flash('failed','Pengajuan Keberatan Anda Gagal Dihapus');
    //         return redirect()->route('admin.dashboard.pengajuan.index');
    //     }
    // }

}

