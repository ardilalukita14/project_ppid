<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Permohonan;
use App\Models\Icon;
use Session;

class PermohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo = Icon::where('kategori_name', '=', 'Logo')->orderBy('created_at', 'DESC')->limit(3)->get();
        $pemohon = Permohonan::orderBy('created_at', 'DESC')->limit(1)->get();
        return view('user.informasipublik.hasil', compact('pemohon', 'logo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $logo = Icon::where('kategori_name', '=', 'Logo')->orderBy('created_at', 'DESC')->limit(3)->get();
        return view('user.informasipublik.permohonan', compact('logo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $year = date('Y');
        $month = date('m');
        $day = date('d');

        $file = $request->file('ktp');
        $file_name = $file->getClientOriginalName();
        $fileName = pathinfo($file_name, PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $fileName = $fileName.'_'.time().'.'.$extension;
        $path = $file->storeAs('permohonan_ktp/'.$year.'/'.$month.'/'.$day, $fileName, 'local');

        // $files = $request->file('akta');
        // $files_name = $files->getClientOriginalName();
        // $filesName = pathinfo($files_name, PATHINFO_FILENAME);
        // $extension = $files->getClientOriginalExtension();
        // $filesName = $filesName.'_'.time().'.'.$extension;
        // $paths = $files->storeAs('permohonan_akta_notaris/'.$year.'/'.$month.'/'.$day, $filesName, 'local');

        $permohonan = new permohonan;
        $permohonan->kategori_permohonan = $request->kategori_permohonan;
        $permohonan->nik_nip = $request->nik_nip;
        $permohonan->nama_lengkap = $request->nama_lengkap;
        $permohonan->ktp = $path;
        // $permohonan->akta = $paths;
        $permohonan->email = $request->email;
        $permohonan->telepon = $request->telepon;
        $permohonan->pekerjaan = $request->pekerjaan;
        $permohonan->alamat = $request->alamat;
        $permohonan->rincian_informasi = $request->rincian_informasi;
        $permohonan->tujuan = $request->tujuan;
        $permohonan->get_information = $request->get_information;
        $permohonan->copy_information = $request->copy_information;
        $permohonan->how_copy = $request->how_copy;
        $permohonan->kode_permohonan = mt_rand(10000000,99999999);
        $permohonan->save();
        
        if ($permohonan) {
            Session::flash('success','Data Permohonan Berhasil Ditambahkan');
            return redirect()->route('permohonan-informasi.index');
        } else {
            Session::flash('failed','Data Permohonan Gagal Ditambahkan');
            return redirect()->route('permohonan-informasi.index');
        }
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
    public function destroy($id)
    {
        //
    }
}
