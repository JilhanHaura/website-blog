<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Mahasiswa;
use \App\Models\Jurusan;
use \App\Models\berita;
use \App\Models\Kategori;
use \App\Models\Kontak;
use \App\Models\Dosen;
use \App\Models\Prestasi;
use \App\Models\Galeri;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name'=>'Jilhan Haura',
            'email'=>'jilhanhaura7@gmail.com',
        ]);
        User::factory(10)->create();
        Mahasiswa::factory(20)->create();
        Prestasi::create([
            'nama' =>'Juara 1 Solo Song'
        ]);
        Prestasi::create([
            'nama' =>'Peraih Medali Emas Debate'
        ]);
        Prestasi::create([
            'nama' =>'Lulus IISMAVO'
        ]);
        Prestasi::create([
            'nama' =>'Lulus PIMNAS'
        ]);
        Prestasi::create([
            'nama' =>'Juara 1 programming'
        ]);
        Jurusan::create([
             'nama' =>'Teknologi Informasi'
         ]);
        Jurusan::create([
            'nama' =>'Bahasa inggris'
        ]);

        Kategori::create([
            'nama' =>'Web Programming'
        ]);
        Kategori::create([
            'nama' =>'Networking'
        ]);
        Dosen::factory(20)->create();
        Galeri::factory(20)->create();
        \App\Models\berita::factory(30)->create();
        \App\Models\Mahasiswa::factory(30)->create();
        \App\Models\Kontak::factory(30)->create();
        \App\Models\Dosen::factory(30)->create();
        \App\Models\Galeri::factory(30)->create();
    }

}
