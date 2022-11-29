<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Kategori;
use App\Models\User;

class AdminController extends Controller
{
    public function register(){
        return view('auth.register');
    }
    public function dashboard(){
        $publish = Post::where('ispublish', '=', '1')
                    ->count();
        $unpublish = Post::where('ispublish', '=', '0')
                    ->count();
        $publishall = Post::all()
                    ->count();
        $categories = Kategori::all()
                    ->count();
        $users = User::all()
                    ->count();
        return view('admin.index', compact('publish', 'unpublish', 'publishall', 'categories', 'users'));
    }

    public function coba(){
        return view('admin.coba');
    }
}
