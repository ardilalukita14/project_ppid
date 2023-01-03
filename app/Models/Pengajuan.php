<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;
    public $table = "pengajuan";
    protected $fillable = [
        'kode_permohonan', 'nik_nip'];
}
