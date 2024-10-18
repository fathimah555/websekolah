<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        Guru::create([
            'nama' => 'suci',
            'jabatan' => 'Wakil Kepala Sekolah Bidang Kurikulum',
            'gambar' => 'https://sman42-jkt.sch.id/wp-content/uploads/2024/10/1.png',
            'tipe' => 'struktur',

        ]);

        Guru::create([
            'nama' => 'suci',
            'jabatan' => 'Kepala Sekolah',
            'gambar' => 'https://sman42-jkt.sch.id/wp-content/uploads/2024/10/2.png',
            'tipe' => 'struktur',

        ]);

        Guru::create([
            'nama' => 'suci',
            'jabatan' => 'Wakil Kepala Sekolah Bidang kesiswaan',
            'gambar' => 'https://sman42-jkt.sch.id/wp-content/uploads/2024/10/3.jpg',
            'tipe' => 'struktur',

        ]);

        Guru::create([
            'nama' => 'suci',
            'jabatan' => 'Wakil Kepala Sekolah Bidang prasarana',
            'gambar' => 'https://sman42-jkt.sch.id/wp-content/uploads/2024/10/2.png',
            'tipe' => 'struktur',

        ]);

        Guru::create([
            'nama' => 'syifa',
            'jabatan' => 'Guru Agama',
            'gambar' => 'https://sman42-jkt.sch.id/wp-content/uploads/2024/10/3.jpg',
            'tipe' => 'daftar',

        ]);

        Guru::create([
            'nama' => 'syifa',
            'jabatan' => 'Guru Bahasa Inggris',
            'gambar' => 'https://sman42-jkt.sch.id/wp-content/uploads/2024/10/3.jpg',
            'tipe' => 'daftar',

        ]);

        Guru::create([
            'nama' => 'syifa',
            'jabatan' => 'Guru Bahasa Indonesia',
            'gambar' => 'https://sman42-jkt.sch.id/wp-content/uploads/2024/10/2.png',
            'tipe' => 'daftar',

        ]);

        Guru::create([
            'nama' => 'syifa',
            'jabatan' => 'Guru Matematika',
            'gambar' => 'https://sman42-jkt.sch.id/wp-content/uploads/2024/10/3.jpg',
            'tipe' => 'daftar',

        ]);
    }
}
