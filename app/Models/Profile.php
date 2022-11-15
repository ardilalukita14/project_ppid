<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    public $table = "profile";
    protected $fillable = [
        'kategori_id','deskripsi', 'user_id'];
    
    public function kategoriprofile(){
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
