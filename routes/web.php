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
route::get('/',[\App\Http\Controllers\User\BaseController::class,'index'])->name('layouts.frontend.index');
route::get('/profil-kota-madiun',[\App\Http\Controllers\FrontendController::class,'profilkota'])->name('layouts.frontend.profilkota');
route::get('/sejarah-kota-madiun',[\App\Http\Controllers\FrontendController::class,'sejarah'])->name('layouts.frontend.sejarahkota');

/** Slug */
Route::get('/kategori/{slug}', [App\Http\Controllers\User\BaseController::class, 'contents_kategori'] )->name('contents_kategori');
Route::get('/berita/{year}/{month}/{day}/{slug}', [App\Http\Controllers\User\BaseController::class, 'contents_blog'] )->name('contents_blog');

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
Route::post('/profil-ppid/store', [App\Http\Controllers\ProfilePPIDController::class, 'store'])->name('profilppid.create');

/** CRUD Data PPID Pelaksana Kota Madiun*/
Route::get('/ppid-pelaksana', [\App\Http\Controllers\PPIDPelaksanaController::class, 'index'])->name('ppid.pelaksana.index');
Route::get('/create/ppid-pelaksana', [\App\Http\Controllers\PPIDPelaksanaController::class, 'create'])->name('ppid.pelaksana.create');
Route::post('/create/ppid-pelaksana', [\App\Http\Controllers\PPIDPelaksanaController::class, 'store'])->name('ppid.pelaksana.create');
Route::get('/edit-ppid-pelaksana/{id}', [\App\Http\Controllers\PPIDPelaksanaController::class, 'edit'])->name('ppid.pelaksana.edit');
Route::post('/edit-ppid-pelaksana/{id}', [\App\Http\Controllers\PPIDPelaksanaController::class, 'update'])->name('ppid.pelaksana.edit');
Route::delete('/hapus-ppid-pelaksana/{ppid}', [\App\Http\Controllers\PPIDPelaksanaController::class, 'destroy'])->name('ppid.pelaksana.destroy');

/** Daftar Informasi Publik dan SOP*/
Route::get('/informasi/daftar-informasi-publik-2022',[\App\Http\Controllers\InformationController::class,'informasipublik'])->name('informasi.publik.index');
Route::get('/informasi/daftar-informasi-publik-ppid-pelaksana',[\App\Http\Controllers\InformationController::class,'informasippid'])->name('informasi.ppid.index');
Route::get('/informasi/informasi-secara-berkala',[\App\Http\Controllers\InformationController::class,'informasiberkala'])->name('informasi.berkala.index');
Route::get('/informasi/informasi-serta-merta',[\App\Http\Controllers\InformationController::class,'informasisertamerta'])->name('informasi.serta.merta.index');
Route::get('/informasi/informasi-setiap-saat',[\App\Http\Controllers\InformationController::class,'informasisetiapsaat'])->name('informasi.setiap.saat.index');
Route::get('/informasi/informasi-dikecualikan-penetapan-dan-proses-uji-konsekuensi',[\App\Http\Controllers\InformationController::class,'informasidikecualikan'])->name('informasi.dikecualikan.index');
Route::get('/informasi/sop-pedoman-pengelolaan-organisasi',[\App\Http\Controllers\InformationController::class,'soporganisasi'])->name('sop.organisasi.index');
Route::get('/informasi/sop-pedoman-pengelolaan-administrasi',[\App\Http\Controllers\InformationController::class,'sopadministrasi'])->name('sop.administrasi.index');
Route::get('/informasi/sop-pedoman-pengelolaan-kepegawaian',[\App\Http\Controllers\InformationController::class,'sopkepegawaian'])->name('sop.kepegawaian.index');
Route::get('/informasi/sop-pedoman-pengelolaan-keuangan',[\App\Http\Controllers\InformationController::class,'sopkeuangan'])->name('sop.keuangan.index');
Route::post('/informasi/store', [App\Http\Controllers\InformationController::class, 'store'])->name('information.create');

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
    Route::get('document/destroy/{document}', [App\Http\Controllers\PostController::class, 'destroy_document'] )->name('destroy_document');
    Route::get('berkas/destroy/{berkas}', [App\Http\Controllers\ProfileController::class, 'destroy_berkas'] )->name('destroy_berkas');
    Route::get('berkasppid/destroy/{berkasppid}', [App\Http\Controllers\ProfilePPIDController::class, 'destroy_berkasppid'] )->name('destroy_berkasppid');
    Route::get('berkas/destroy/{berkas}', [App\Http\Controllers\InformationController::class, 'destroy_berkas_informasi'] )->name('destroy_berkas_informasi');
    });
});

/** Data File */

Route::middleware('verified')->group(function () {
    Route::get('/file/{file}', [App\Http\Controllers\FileController::class, 'show'])->name('file.show');

});

/** Menu Profile Pemerintah Kota Madiun */
Route::get('/sejarah-kota-madiun',[\App\Http\Controllers\User\MainController::class,'sejarah_madiun'])->name('menu.sejarah.madiun');
Route::get('/letak-geografis-kota-madiun',[\App\Http\Controllers\User\MainController::class,'geografis_madiun'])->name('menu.geografis.madiun');
Route::get('/profile-pemerintah-kota-madiun',[\App\Http\Controllers\User\MainController::class,'profil_pemerintah'])->name('menu.profilepemerintah.madiun');
Route::get('/profile-pejabat-kota-madiun',[\App\Http\Controllers\User\MainController::class,'profil_pejabat'])->name('menu.profilepejabat.madiun');
Route::get('/lhkpn-pejabat-publik-pemerintah-kota-madiun',[\App\Http\Controllers\User\MainController::class,'lhkpn_pejabat'])->name('menu.lhkpn.madiun');
Route::get('/visi-misi-kota-madiun',[\App\Http\Controllers\User\MainController::class,'visimisi'])->name('menu.visimisi.madiun');
Route::get('/bagan-struktur-organisasi-pemerintah-kota-madiun',[\App\Http\Controllers\User\MainController::class,'struktur_pemerintah'])->name('menu.strukturpemerintah.madiun');
Route::get('/struktur-organisasi-unit-kerja',[\App\Http\Controllers\User\MainController::class,'struktur_unitkerja'])->name('menu.strukturunitkerja.madiun');
Route::get('/tupoksi-pemerintah-kota-madiun',[\App\Http\Controllers\User\MainController::class,'tupoksi_pemerintah'])->name('menu.tupoksipemerintah.madiun');
Route::get('/tupoksi-unit-kerja-kota-madiun',[\App\Http\Controllers\User\MainController::class,'tupoksi_unitkerja'])->name('menu.tupoksiunitkerja.madiun');
Route::get('/agenda-kerja-dan-kegiatan-pimpinan-pemerintah-kota-madiun',[\App\Http\Controllers\User\MainController::class,'agenda'])->name('menu.agenda.madiun');


/** Menu Profile PPID */
Route::get('/profil-ppid-kota-madiun',[\App\Http\Controllers\User\MainController::class,'profil_ppid'])->name('menu.profil.ppid');
Route::get('/visi-misi-ppid-kota-madiun',[\App\Http\Controllers\User\MainController::class,'visimisi_ppid'])->name('menu.visimisi.ppid');
Route::get('/struktur-organisasi-ppid-kota-madiun',[\App\Http\Controllers\User\MainController::class,'struktur_ppid'])->name('menu.struktur.ppid');
Route::get('/sop-ppid-kota-madiun',[\App\Http\Controllers\User\MainController::class,'sop_ppid'])->name('menu.sop.ppid');
Route::get('/tupoksi-ppid-kota-madiun',[\App\Http\Controllers\User\MainController::class,'tupoksi_ppid'])->name('menu.tupoksi.ppid');
Route::get('/sk-ppid-kota-madiun',[\App\Http\Controllers\User\MainController::class,'sk_ppid'])->name('menu.sk.ppid');
Route::get('/perwal-ppid-kota-madiun',[\App\Http\Controllers\User\MainController::class,'perwal_ppid'])->name('menu.perwal.ppid');
Route::get('/maklumat-ppid-kota-madiun',[\App\Http\Controllers\User\MainController::class,'maklumat_ppid'])->name('menu.maklumat.ppid');
Route::get('/jampelayanan-ppid-kota-madiun',[\App\Http\Controllers\User\MainController::class,'jampelayanan_ppid'])->name('menu.jampelayanan.ppid');
Route::get('/informasi-publik-ppid-kota-madiun',[\App\Http\Controllers\User\MainController::class,'informasi_publik'])->name('menu.informasipublik.ppid');
Route::get('/informasi-dikecualikan-ppid-kota-madiun',[\App\Http\Controllers\User\MainController::class,'informasi_dikecualikan'])->name('menu.informasidikecualikan.ppid');

/** Menu Informasi Publik */
/** Menu Profile Pemerintah Kota Madiun */
Route::get('/daftar-informasi-publik-ppid-kota-madiun',[\App\Http\Controllers\User\MainController::class,'informpublik'])->name('informasi.publik');
Route::get('/daftar-informasi-publik-ppid-pelaksana',[\App\Http\Controllers\User\MainController::class,'informppid'])->name('informasi.ppid');
Route::get('/informasi-secara-berkala',[\App\Http\Controllers\User\MainController::class,'informberkala'])->name('informasi.berkala');
Route::get('/informasi-serta-merta',[\App\Http\Controllers\User\MainController::class,'informsertamerta'])->name('informasi.sertamerta');
Route::get('/informasi-setiap-saat',[\App\Http\Controllers\User\MainController::class,'informsetiapsaat'])->name('informasi.setiapsaat');
Route::get('/informasi-dikecualikan',[\App\Http\Controllers\User\MainController::class,'informdikecualikan'])->name('informasi.dikecualikan');

/** Menu SOP */
Route::get('/sop-pedoman-pengelolaan-organisasi',[\App\Http\Controllers\User\MainController::class,'soporganisasi'])->name('sop.organisasi');
Route::get('/sop-pedoman-pengelolaan-administrasi',[\App\Http\Controllers\User\MainController::class,'sopadministrasi'])->name('sop.administrasi');
Route::get('/sop-pedoman-kepegawaian',[\App\Http\Controllers\User\MainController::class,'sopkepegawaian'])->name('sop.kepegawaian');
Route::get('/sop-pedoman-pengelolaan-keuangan',[\App\Http\Controllers\User\MainController::class,'sopkeuangan'])->name('sop.keuangan');

/** Menu PPID Pelaksana */
Route::get('/ppid-pelaksana-kota-madiun',[\App\Http\Controllers\User\MainController::class,'ppidpelaksana'])->name('menu.ppid.pelaksana');
// Auth::routes();

/** File Show */
Route::get('/menu/file/{file}', [App\Http\Controllers\User\FileController::class, 'show'])->name('menu.file');

/** Search Engine */
Route::post('/news/cariberita',[\App\Http\Controllers\User\BaseController::class, 'cari'])->name('reader.search.berita');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
