<?php

namespace Database\Seeders;

use App\Models\Fasilitas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Fasilitas::create([
            'nama' => 'Ruang kelas',
            'deskripsi' => 'Ruang kelasnyang luas dan nyaman memberikan tempat yang tenang bagi siswa untuk belajar dengan fokus.',
            'gambar' => 'img8.jpg',       
         ]);

        Fasilitas::create([
            'nama' => 'Perpustakan',
            'deskripsi' => 'Perpustakaan yang luas dengan koleksi buku yang lengkap, memberikan tempat yang tenang bagi siswa untuk belajar dan membaca.',
            'gambar' => 'Picture10.jpg',       
         ]);

        Fasilitas::create([
            'nama' => 'Ruang Rapat',
            'deskripsi' => 'Ruang rapat yang cocok digunakan untuk kita berbicara suatu tentang informasi kepada khalayak yang ramai.',
            'gambar' => 'Picture11.jpg',
        ]);

        Fasilitas::create([
            'nama' => 'Ruang Aula Kapasitas 200',
            'deskripsi' => 'Tempat yang digunakan untuk melalakukan perkumpulan-perkumpulan yang besar.',
            'gambar' => 'Picture12.jpg',
        ]);

        Fasilitas::create([
            'nama' => 'Lift',
            'deskripsi' => 'Ini digunakan sebagai sarana fasilitas yang memudahkan para warga sekolah .',
            'gambar' => 'Picture14.jpg ',
        ]);

        Fasilitas::create([
            'nama' => 'Bank Mini',
            'deskripsi' => 'Tempat untuk menabung seluruh warga sekolah.',
            'gambar' => 'Picture15.jpg',
        ]);

        
        Fasilitas::create([
            'nama' => 'Parkiran',
            'deskripsi' => 'Tempat yang digunakan sebgaai fasilitas untuk menaruh kendaraan roda 2/4.',
            'gambar' => 'Picture16.jpg',
        ]);

        Fasilitas::create([
            'nama' => 'Ruang UP TKJ ',
            'deskripsi' => 'Ruangan yang biasa dipake oleh anak TKJ.',
            'gambar' => 'Picture37.jpg',
        ]);

        
        Fasilitas::create([
            'nama' => 'Ruang Pratik AKL ',
            'deskripsi' => 'Ruangan yang biasa dipake oleh anak Akuntansi keuangan dan lembaga.',
            'gambar' => 'Picture49.jpg',
        ]);

        Fasilitas::create([
            'nama' => 'Ruang Pratik TSM ',
            'deskripsi' => 'Ruangan yang biasa dipake oleh anak Teknik sepeda motor.',
            'gambar' => 'Picture50.jpg',
        ]);

        Fasilitas::create([
            'nama' => 'Ruang Pratik TKJ ',
            'deskripsi' => 'Ruangan yang biasa dipake oleh anak Teknik kabel dan jaringan.',
            'gambar' => 'Picture51.jpg',
        ]);

        Fasilitas::create([
            'nama' => 'Ruang Aula Kapasitas 500',
            'deskripsi' => 'Tempat kedua yang digunakan untuk melalakukan perkumpulan-perkumpulan yang besar dengan kapasitas yang sudah di sesuaikan.',
            'gambar' => 'Picture53.jpg',
        ]);
    }
}
