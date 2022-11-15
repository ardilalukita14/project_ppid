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

// route::get('/login-admin',[\App\Http\Controllers\AdminController::class,'login'])->name('auth.login');
// route::get('/register',[\App\Http\Controllers\AdminController::class,'register'])->name('auth.register');

/** Dashboard Admin */
Route::group(['middleware'=>['admin','auth','PreventBackHistory']], function(){
route::get('/dashboard-admin',[\App\Http\Controllers\AdminController::class,'dashboard'])->name('admin.index');
route::get('/profile/kota-madiun',[\App\Http\Controllers\ProfileController::class,'madiunprofile'])->name('madiunprofile.index');

/** Kategori Profile */
Route::get('/kategori-profile','App\Http\Controllers\KategoriProfileController@index')->name('kategori.index');
Route::get('/kategori-profile/create','App\Http\Controllers\KategoriProfileController@create')->name('kategori.create');
Route::post('/kategori-profile/create','App\Http\Controllers\KategoriProfileController@store')->name('kategori.create');
Route::get('/kategori-profile-edit/{id}','App\Http\Controllers\KategoriProfileController@edit')->name('kategori.edit');
Route::post('/kategori-profile-edit/{id}','App\Http\Controllers\KategoriProfileController@update')->name('kategori.edit');
Route::delete('/kategori-profile/hapus/{id}','App\Http\Controllers\KategoriProfileController@destroy')->name('kategori.delete');
});
