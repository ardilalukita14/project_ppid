<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Kategori;
use App\Models\Post;
use App\Models\Document;

class BaseController extends Controller
{

    public function contents_blog($year, $month, $day,$slug){
        $time =$year.'-'.$month.'-'.$day;
        $data = Post::where('slug', $slug)->where('tgl_post', '=', $time)->where('ispublish', '=', '1')->get();
        $parent = "Berita";
        $subjudul = "Detail Berita";
        $child = "";
        $root_parent = "/";
        $title = "Detail Berita";
  
        $post =  Post::where('slug', $slug)->where('tgl_post', '=', $time)->where('ispublish', '=', '1')->first();
        $galleries = Document::where('posts_id', '=', $post->id)->where('jenis_file', '=', 'gambar')->get();
        $files = Document::where('posts_id', '=', $post->id)->where('jenis_file', '=', 'lampiran')->get();
        return view('user.berita.detail', compact('files','post','galleries','subjudul','data', 'parent', 'child', 'root_parent', 'title'));
    }

    public function contents_kategori($slug){
        $data = Kategori::where('slug', $slug)->first();

        if($data != null){
            $posts = Post::where('kategori_id', '=', $data->id )->where('ispublish', '=', '1')->orderBy('tgl_post', 'DESC')->paginate(3);
            $child = $data->nama_kategori;
        }else{
            $posts = "";
            $child = $slug;
           
        }

        $subjudul = "Kategori";
        $parent = $slug;
        $root_parent = "/";
        $title = "Kategori Berita";
  
        $categories = Kategori::all();
    
        return view('user.kategori.base', compact('subjudul','categories','posts', 'parent', 'child', 'root_parent', 'title'));
      
    }

    public function index()
    {

        // $beritapop = Post::where('ispublish', '=', '1')->where('category_id', '=', '1')->orderBy('tgl_post', 'DESC')->orderBy('created_at', 'DESC')->first();
            
        $beritaterkini = Post::where('ispublish', '=', '1')->orderBy('tgl_post', 'DESC')->orderBy('created_at', 'DESC')->limit(3)->get();
        
        $beritapinned = Post::where('ispublish', '=', '1')->where('ispinned', '=', '1')->orderBy('tgl_post', 'DESC')->limit(3)->get();
        
        $beritakonten = Post::where('ispublish', '=', '1')->where('ispinned', '=', '0')->orderBy('tgl_post', 'DESC')->orderBy('created_at', 'DESC')->limit(6)->get();

      
        // $youtube = Youtube::where('ispublish', '=', '1')->orderBy('created_at', 'DESC')->first();
    
    return view('user.berita.index',compact('beritaterkini', 'beritapinned', 'beritakonten'));
    }

}
