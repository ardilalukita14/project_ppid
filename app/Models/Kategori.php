<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    public $table = "kategori_profile";
    protected $fillable = [
        'nama_kategori', 'status','tanggal'];

    
    public function profile(){
        return $this->hasMany(Profile::class);
    }
}
