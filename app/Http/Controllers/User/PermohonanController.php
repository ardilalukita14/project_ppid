<?php

namespace App\Http\Controllers\User;

use Session;
use App\Models\Icon;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Permohonan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Pengajuan;
use Illuminate\Support\Facades\Auth;

class PermohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo = Icon::where('kategori_name', '=', 'Logo')->orderBy('created_at', 'DESC')->limit(6)->get();
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
        $logo = Icon::where('kategori_name', '=', 'Logo')->orderBy('created_at', 'DESC')->limit(6)->get();
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

        if($request->hasFile('akta')){
            $files = $request->file('akta');
                $files_name = $files->getClientOriginalName();
                $filesName = pathinfo($files_name, PATHINFO_FILENAME);
                $extension = $files->getClientOriginalExtension();
                $filesName = $filesName.'_'.time().'.'.$extension;
                $paths = $files->storeAs('permohonan_akta_notaris/'.$year.'/'.$month.'/'.$day, $filesName, 'local');

        $permohonan = Permohonan::create([
            'kategori_permohonan' => $request->kategori_permohonan,
            'nik_nip' => $request->nik_nip,
            'nama_lengkap' => $request->nama_lengkap,
            'ktp' => $path,
            'akta' => $paths,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'rincian_informasi' => $request->rincian_informasi,
            'tujuan' => $request->tujuan,
            'get_information' => $request->get_information,
            'copy_information' => $request->copy_information,
            'how_copy' => $request->how_copy,
            'kode_permohonan' => mt_rand(10000000,99999999)
        ]);
        
    }else{

        $permohonan = Permohonan::create([
            'kategori_permohonan' => $request->kategori_permohonan,
            'nik_nip' => $request->nik_nip,
            'nama_lengkap' => $request->nama_lengkap,
            'ktp' => $path,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'rincian_informasi' => $request->rincian_informasi,
            'tujuan' => $request->tujuan,
            'get_information' => $request->get_information,
            'copy_information' => $request->copy_information,
            'how_copy' => $request->how_copy,
            'kode_permohonan' => mt_rand(10000000,99999999)
        ]);
    }

        if ($permohonan) {
            Session::flash('success','Data Permohonan Berhasil Ditambahkan');
            return redirect()->route('permohonan-informasi.index');
        } else {
            Session::flash('failed','Data Permohonan Gagal Ditambahkan');
            return redirect()->route('permohonan-informasi.index');
        }
    }


    public function kanalpengaduan(){
        $information = Profile::where('kategori_profile', '=', 'kanalpengaduan')->first();
      
        $title = "Informasi";
        $title2 = "Informasi Publik";
        $subtitle = "Informasi Kanal Pengaduan";
        $logo = Icon::where('kategori_name', '=', 'Logo')->orderBy('created_at', 'DESC')->limit(6)->get();
        $beritaterkini = Post::where('ispublish', '=', '1')->orderBy('tgl_post', 'DESC')->orderBy('created_at', 'DESC')->limit(3)->get();
        return view('user.informasipublik.kanalpengaduan', compact('information', 'beritaterkini','title', 'title2', 'subtitle', 'logo' ));
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

    public function validasi_store(Request $request){
        $permohonanupd = Permohonan::findorfail($request->idvalidasi);
        $permohonanupd->status_form = $request->statusform;
        $permohonanupd->catatan_validasi = $request->catatanvalidasi;
        $permohonanupd->update();

        Session::flash('success','Data Permohonan  Berhasil Divalidasi');
        return redirect()->route('admin.informasipublik.indexpermohonan');
        
    }


    public function statistik(){
        $jumlahpermohonan = Permohonan::count();
        $jumlahkeberatan = Pengajuan::count();
        $jumlahinfopublik = $jumlahpermohonan+$jumlahkeberatan;
        $jumlahselesai = Permohonan::where('status_form', '=', '3')->count();
        
        
        $grafikmonth= DB::select(DB::raw("select DATE_TRUNC('month',p.created_at) AS  createdat, to_char(p.created_at ,'Mon') as mon, extract(year from p.created_at ) as tahun, extract(month from p.created_at ) as bulan, COUNT(id) AS count
        FROM permohonan p 
        GROUP BY DATE_TRUNC('month',p.created_at), mon,tahun, bulan
        order by tahun desc, bulan asc limit 12;"));
        
        if($grafikmonth != null){
            foreach ($grafikmonth as $grafik) {
                $grafikbulan[] = '"'.$grafik->mon.' '.$grafik->tahun.'"';
                $grafikjumlah[] = $grafik->count;
            }
        }

        $title = "Statistik Layanan Informasi Publik";
        $title2 = "Informasi Publik";
        $subtitle = "Statistika Layanan Informasi Publik";
        $logo = Icon::where('kategori_name', '=', 'Logo')->orderBy('created_at', 'DESC')->limit(6)->get();
        $beritaterkini = Post::where('ispublish', '=', '1')->orderBy('tgl_post', 'DESC')->orderBy('created_at', 'DESC')->limit(3)->get();
        return view('user.informasipublik.statistik', compact('grafikmonth','grafikbulan','grafikjumlah','beritaterkini','title', 'title2', 'subtitle', 'logo','jumlahinfopublik' ,'jumlahpermohonan','jumlahkeberatan','jumlahselesai'));

    }

    public function cekstatus_permohonan(){
         
        $title = "Informasi";
        $title2 = "Informasi Publik";
        $subtitle = "Informasi Kanal Pengaduan";
        $logo = Icon::where('kategori_name', '=', 'Logo')->orderBy('created_at', 'DESC')->limit(6)->get();
        $beritaterkini = Post::where('ispublish', '=', '1')->orderBy('tgl_post', 'DESC')->orderBy('created_at', 'DESC')->limit(3)->get();
        return view('user.informasipublik.cekstatus_permohonan', compact( 'beritaterkini','title', 'title2', 'subtitle', 'logo' ));
    }
}
