<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use DateTime;
use App\Models\Permohonan;
use App\Models\Pengajuan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Session;

class InformasiPublikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexpermohonan()
    {
        $permohonan = Permohonan::all();
        $judul = "Data Permohonan User";
        return view('admin.informasipublik.indexpermohonan', compact('permohonan', 'judul'));
    }

    public function indexpengajuan()
    {
        $pengajuan = Pengajuan::all();
        $judul = "Data Pengajuan User";
        return view('admin.informasipublik.indexpengajuan', compact('pengajuan', 'judul'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroypermohonan(Permohonan $permohonan)
    {
        $permohonan_data = Permohonan::findorfail($permohonan->id);
        $permohonan_data->delete();
        
        $permohonan->delete();

        Session::flash('delete','Data Permohonan Berhasil Dihapus');
        return redirect()->route('admin.informasipublik.indexpermohonan');
    }

    public function destroypengajuan(Pengajuan $pengajuan)
    {
        $pengajuan_data = Pengajuan::findorfail($pengajuan->id);
        $pengajuan_data->delete();
        
        $pengajuan->delete();

        Session::flash('delete','Data Permohonan Berhasil Dihapus');
        return redirect()->route('admin.informasipublik.indexpengajuan');
    }
}
