<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
route::get('/coba',[\App\Http\Controllers\AdminController::class,'coba'])->name('admin.coba');

/** Login Admin */

Route::get('/admin/login',[\App\Http\Controllers\Auth\LoginController::class,'showLoginForm'])->name('login');
Route::post('/admin/login',[\App\Http\Controllers\Auth\LoginController::class,'login']);
Route::post('/admin/logout',[\App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');

/** Halaman Utama */
route::get('/',[\App\Http\Controllers\FrontendController::class,'index'])->name('layouts.frontend.index');
route::get('/profil-kota-madiun',[\App\Http\Controllers\FrontendController::class,'profilkota'])->name('layouts.frontend.profilkota');
route::get('/sejarah-kota-madiun',[\App\Http\Controllers\FrontendController::class,'sejarah'])->name('layouts.frontend.sejarahkota');

/** Slug */
Route::get('/berita/{year}/{month}/{day}/{slug}', [App\Http\Controllers\HomeController::class, 'contents_blog'] )->name('contents_blog');
Route::get('/kategori/{slug}', [App\Http\Controllers\HomeController::class, 'contents_kategori'] )->name('contents_kategori');
Route::get('/{slug}', [App\Http\Controllers\HomeController::class, 'content_kategori'] )->name('content_kategori');

/** Dashboard Admin */
Route::group(['middleware'=>['admin','auth','PreventBackHistory']], function(){
Route::get('/dashboard-admin-ppid',[\App\Http\Controllers\AdminController::class,'dashboard'])->name('admin.index');

/** Menu Profile Pemerintah Kota Madiun*/
Route::get('/profile/kota-madiun',[\App\Http\Controllers\ProfileController::class,'madiunprofile'])->name('madiunprofile.index');
Route::get('/profile/sejarah',[\App\Http\Controllers\ProfileController::class,'sejarah'])->name('sejarah.index');
Route::get('/profile/letak-geografis',[\App\Http\Controllers\ProfileController::class,'geografis'])->name('geografis.index');
Route::get('/profile/profil-pemerintah',[\App\Http\Controllers\ProfileController::class,'profilepemerintah'])->name('profil.pemerintah.index');
Route::get('/profile/profil-pejabat',[\App\Http\Controllers\ProfileController::class,'profilepejabat'])->name('profil.pejabat.index');
Route::get('/profile/lhkpn-pejabat',[\App\Http\Controllers\ProfileController::class,'lhkpnpejabat'])->name('lhkpn.index');
Route::get('/profile/visi-misi',[\App\Http\Controllers\ProfileController::class,'visimisi'])->name('visimisi.index');
Route::get('/profile/struktur-pemerintah',[\App\Http\Controllers\ProfileController::class,'strukturpemerintah'])->name('struktur.pemerintah.index');
Route::get('/profile/struktur-unit-kerja',[\App\Http\Controllers\ProfileController::class,'strukturunitkerja'])->name('struktur.unitkerja.index');
Route::get('/profile/tupoksi-pemerintah',[\App\Http\Controllers\ProfileController::class,'tupoksipemerintah'])->name('tupoksi.pemerintah.index');
Route::get('/profile/tupoksi-unit-kerja',[\App\Http\Controllers\ProfileController::class,'tupoksiunitkerja'])->name('tupoksi.unitkerja.index');
Route::get('/profile/agenda-kerja-kegiatan-pimpinan',[\App\Http\Controllers\ProfileController::class,'agenda'])->name('agenda.index');
Route::post('/profil/store', [App\Http\Controllers\ProfileController::class, 'store'])->name('profil.create');

/** Menu Profile PPID*/
Route::get('/profile/ppid',[\App\Http\Controllers\ProfilePPIDController::class,'profileppid'])->name('profile.ppid.index');
Route::get('/profile/visi-misi-ppid',[\App\Http\Controllers\ProfilePPIDController::class,'visimisippid'])->name('visimisi.ppid.index');
Route::get('/profile/bagan-struktur-ppid',[\App\Http\Controllers\ProfilePPIDController::class,'baganstruktur'])->name('bagan.struktur.index');
Route::get('/profile/sop-ppid',[\App\Http\Controllers\ProfilePPIDController::class,'sop'])->name('sop.index');
Route::get('/profile/tupoksi-ppid',[\App\Http\Controllers\ProfilePPIDController::class,'tupoksippid'])->name('tupoksi.ppid.index');
Route::get('/profile/sk-ppid',[\App\Http\Controllers\ProfilePPIDController::class,'skppid'])->name('sk.ppid.index');
Route::get('/profile/perwal-ppid',[\App\Http\Controllers\ProfilePPIDController::class,'perwalppid'])->name('perwal.ppid.index');
Route::get('/profile/maklumat-ppid',[\App\Http\Controllers\ProfilePPIDController::class,'maklumatppid'])->name('maklumat.ppid.index');
Route::get('/profile/jam-pelayanan',[\App\Http\Controllers\ProfilePPIDController::class,'jampelayanan'])->name('jam.pelayanan.index');
Route::get('/profile/sk-daftar-informasi-publik',[\App\Http\Controllers\ProfilePPIDController::class,'skpublik'])->name('sk.publik.index');
Route::get('/profile/sk-daftar-informasi-dikecualikan',[\App\Http\Controllers\ProfilePPIDController::class,'skdikecualikan'])->name('sk.dikecualikan.index');

/** CRUD Data PPID Pelaksana Kota Madiun*/
Route::get('/ppid-pelaksana', [\App\Http\Controllers\PPIDPelaksanaController::class, 'index'])->name('ppid.pelaksana.index');
Route::get('/create/ppid-pelaksana', [\App\Http\Controllers\PPIDPelaksanaController::class, 'create'])->name('ppid.pelaksana.create');
Route::post('/create/ppid-pelaksana', [\App\Http\Controllers\PPIDPelaksanaController::class, 'store'])->name('ppid.pelaksana.create');
Route::get('/edit-ppid-pelaksana/{id}', [\App\Http\Controllers\PPIDPelaksanaController::class, 'edit'])->name('ppid.pelaksana.edit');
Route::post('/edit-ppid-pelaksana/{id}', [\App\Http\Controllers\PPIDPelaksanaController::class, 'update'])->name('ppid.pelaksana.edit');
Route::delete('/hapus-ppid-pelaksana/{ppid}', [\App\Http\Controllers\PPIDPelaksanaController::class, 'destroy'])->name('ppid.pelaksana.destroy');

/** CRUD Data Daftar Informasi Publik Kota Madiun*/
Route::get('/daftar-informasi-publik', [\App\Http\Controllers\InformasiPublikController::class, 'index'])->name('informasi_publik.daftar_informasi.publik.index');
Route::get('/create/daftar-informasi-publik', [\App\Http\Controllers\InformasiPublikController::class, 'create'])->name('informasi_publik.daftar_informasi.publik.create');
Route::post('/create/daftar-informasi-publik', [\App\Http\Controllers\InformasiPublikController::class, 'store'])->name('informasi_publik.daftar_informasi.publik.create');
Route::get('/edit-daftar-informasi-publik/{id}', [\App\Http\Controllers\InformasiPublikController::class, 'edit'])->name('informasi_publik.daftar_informasi.publik.edit');
Route::post('/edit-daftar-informasi-publik/{id}', [\App\Http\Controllers\InformasiPublikController::class, 'update'])->name('informasi_publik.daftar_informasi.publik.edit');
Route::delete('/hapus-daftar-informasi-publik/{id}', [\App\Http\Controllers\InformasiPublikController::class, 'destroy'])->name('informasi_publik.daftar_informasi.publik.destroy');

/** CRUD Data Daftar Informasi Publik PPID Pelaksana Kota Madiun*/
Route::get('/daftar-informasi-ppid', [\App\Http\Controllers\InformasiPPIDController::class, 'index'])->name('informasi_publik.daftar_informasi.pelaksana.index');
Route::get('/create/daftar-informasi-ppid', [\App\Http\Controllers\InformasiPPIDController::class, 'create'])->name('informasi_publik.daftar_informasi.pelaksana.create');
Route::post('/create/daftar-informasi-ppid', [\App\Http\Controllers\InformasiPPIDController::class, 'store'])->name('informasi_publik.daftar_informasi.pelaksana.create');
Route::get('/edit-daftar-informasi-ppid/{id}', [\App\Http\Controllers\InformasiPPIDController::class, 'edit'])->name('informasi_publik.daftar_informasi.pelaksana.edit');
Route::post('/edit-daftar-informasi-ppid/{id}', [\App\Http\Controllers\InformasiPPIDController::class, 'update'])->name('informasi_publik.daftar_informasi.pelaksana.edit');
Route::delete('/hapus-daftar-informasi-ppid/{id}', [\App\Http\Controllers\InformasiPPIDController::class, 'destroy'])->name('informasi_publik.daftar_informasi.pelaksana.destroy');

/** CRUD Data Daftar Informasi Secara Berkala Kota Madiun*/
Route::get('/daftar-informasi-berkala', [\App\Http\Controllers\InformasiBerkalaController::class, 'index'])->name('informasi_publik.berkala.index');
Route::get('/create/daftar-informasi-berkala', [\App\Http\Controllers\InformasiBerkalaController::class, 'create'])->name('informasi_publik.berkala.create');
Route::post('/create/daftar-informasi-berkala', [\App\Http\Controllers\InformasiBerkalaController::class, 'store'])->name('informasi_publik.berkala.create');
Route::get('/edit-daftar-informasi-berkala/{id}', [\App\Http\Controllers\InformasiBerkalaController::class, 'edit'])->name('informasi_publik.berkala.edit');
Route::post('/edit-daftar-informasi-berkala/{id}', [\App\Http\Controllers\InformasiBerkalaController::class, 'update'])->name('informasi_publik.berkala.edit');
Route::delete('/hapus-daftar-informasi-berkala/{id}', [\App\Http\Controllers\InformasiBerkalaController::class, 'destroy'])->name('informasi_publik.berkala.destroy');

/** Data Kategori*/
Route::get('/kategori', [\App\Http\Controllers\KategoriController::class, 'index'])->name('kategori.index');
Route::get('/kategori/create', [\App\Http\Controllers\KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori/create', [\App\Http\Controllers\KategoriController::class, 'store'])->name('kategori.create');
Route::get('/kategori/edit/{id}', [\App\Http\Controllers\KategoriController::class, 'edit'])->name('kategori.edit');
Route::post('/kategori/edit/{id}', [\App\Http\Controllers\KategoriController::class, 'update'])->name('kategori.edit');
Route::delete('/kategori/hapus/{id}',[\App\Http\Controllers\KategoriController::class, 'destroy'])->name('kategori.destroy');

/** Data Tag*/
Route::prefix('a')->name('admin.')->group(function () {
    Route::resource('/tags', App\Http\Controllers\TagController::class );
    Route::resource('/post', App\Http\Controllers\PostController::class );
    Route::get('document/destroy/{document}', [App\Http\Controllers\Admin\PostController::class, 'destroy_document'] )->name('destroy_document');
    });
});


Route::get('/berita/{year}/{month}/{day}/{slug}', [App\Http\Controllers\HomeController::class, 'content_blog'] )->name('content_blog');
Route::get('/kategori/{slug}', [App\Http\Controllers\HomeController::class, 'content_kategori'] )->name('content_kategori');
/** Data File */

Route::middleware('verified')->group(function () {
    Route::get('/file/{file}', [App\Http\Controllers\FileController::class, 'show'])->name('file.show');

});


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
