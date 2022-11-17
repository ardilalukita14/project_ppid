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

/** Login Admin */

Route::get('/admin/login',[\App\Http\Controllers\Auth\LoginController::class,'showLoginForm'])->name('login');
Route::post('/admin/login',[\App\Http\Controllers\Auth\LoginController::class,'login']);
Route::post('/admin/logout',[\App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');

/** Halaman Utama */
route::get('/',[\App\Http\Controllers\FrontendController::class,'index'])->name('layouts.frontend.index');
route::get('/profil-kota-madiun',[\App\Http\Controllers\FrontendController::class,'profilkota'])->name('layouts.frontend.profilkota');
route::get('/sejarah-kota-madiun',[\App\Http\Controllers\FrontendController::class,'sejarah'])->name('layouts.frontend.sejarahkota');

/** Dashboard Admin */
Route::group(['middleware'=>['admin','auth','PreventBackHistory']], function(){
Route::get('/dashboard-admin-ppid',[\App\Http\Controllers\AdminController::class,'dashboard'])->name('admin.index');

/** Menu Profile */
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

/** Kategori Profile */
// Route::get('/kategori-profile','App\Http\Controllers\KategoriProfileController@index')->name('kategori.index');
// Route::get('/kategori-profile/create','App\Http\Controllers\KategoriProfileController@create')->name('kategori.create');
// Route::post('/kategori-profile/create','App\Http\Controllers\KategoriProfileController@store')->name('kategori.create');
// Route::get('/kategori-profile-edit/{id}','App\Http\Controllers\KategoriProfileController@edit')->name('kategori.edit');
// Route::post('/kategori-profile-edit/{id}','App\Http\Controllers\KategoriProfileController@update')->name('kategori.edit');
// Route::delete('/kategori-profile/hapus/{id}','App\Http\Controllers\KategoriProfileController@destroy')->name('kategori.delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
