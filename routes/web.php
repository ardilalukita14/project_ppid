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

route::get('/',[\App\Http\Controllers\FrontendController::class,'index'])->name('layouts.frontend.index');
route::get('/profil-kota-madiun',[\App\Http\Controllers\FrontendController::class,'profilkota'])->name('layouts.frontend.profilkota');
route::get('/sejarah-kota-madiun',[\App\Http\Controllers\FrontendController::class,'sejarah'])->name('layouts.frontend.sejarahkota');
route::get('/login-admin',[\App\Http\Controllers\AdminController::class,'login'])->name('auth.login');
route::get('/register',[\App\Http\Controllers\AdminController::class,'register'])->name('auth.register');
route::get('/dashboard-admin',[\App\Http\Controllers\AdminController::class,'dashboard'])->name('admin.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
