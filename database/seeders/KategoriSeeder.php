<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori')->insert([
            [
                'nama_kategori' => 'pengumuman'
            ],
            [
                'nama_kategori' => 'produk hukum'
            ],
            [
                'nama_kategori' => 'materi ppid kota'
            ],
            [
                'nama_kategori' => 'materi umum'
            ],
            [
                'nama_kategori' => 'laporan pengaduan'
            ],
            [
                'nama_kategori' => 'berita ppid'
            ],
            [
                'nama_kategori' => 'artikel'
            ],
            [
                'nama_kategori' => 'narasi tunggal'
            ],
            [
                'nama_kategori' => 'galeri'
            ],
            [
                'nama_kategori' => 'infografis'
            ]
        ]);
    }
}
