<?php

namespace Database\Seeders;

use App\Models\Ekskul;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EkskulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ekskul::create([
            'nama' => 'Pramuka',
            'deskripsi' => 'kegiatan ekstrakurikuler yang membentuk jiwa kepemimpinan, kemandirian, dan kedisiplinan siswa. ',
            'gambar' => 'img3.jpg',
        ]);

        Ekskul::create([
            'nama' => 'PMR',
            'deskripsi' => 'merupakan ekskul yang berfokus pada pendidikan kesehatan, pertolongan pertama, serta kemanusiaan.',
            'gambar' => 'img6.jpg',
        ]);

        Ekskul::create([
            'nama' => 'Rohani Islam',
            'deskripsi' => ' ekskul yang bertujuan untuk memperdalam pengetahuan agama Islam dan meningkatkan spiritualitas siswa.',
            'gambar' => 'img5.jpg',
        ]);

        Ekskul::create([
            'nama' => 'Silat',
            'deskripsi' => 'ekskul olahraga yang mengajarkan teknik-teknik dasar permainan voli seperti servis, smash, blocking, dan passing.',
            'gambar' => 'img1.jpg',
        ]);
        
        Ekskul::create([
            'nama' => ' Bola Basket',
            'deskripsi' => 'kegiatan ini bertujuan untuk melatih jiwa kepemimpinan diri kita',
            'gambar' => 'bolabasket.jpeg',
        ]);

        Ekskul::create([
            'nama' => 'Badmintoon',
            'deskripsi' => ' olahraga yang melatih ketangkasan, kecepatan, dan strategi. Ekskul ini sangat cocok bagi siswa yang ingin mengasah kemampuan bermain bulu tangkis, baik secara individu maupun ganda.a',
            'gambar' => 'badmitoon.jpeg',
        ]);

        Ekskul::create([
            'nama' => 'Paskibra',
            'deskripsi' => 'ekskul yang bertujuan untuk melatih siswa dalam disiplin, kerja sama tim, dan cinta tanah air',
            'gambar' => 'paskibra.jpeg',
        ]);

        Ekskul::create([
            'nama' => 'Tari Daerah',
            'deskripsi' => ' ekstrakurikuler yang mengajarkan tarian tradisional daerah yang melatih gerakan cepat dan sinkronisasi antar anggota.',
            'gambar' => 'img4.jpg',
        ]);

        Ekskul::create([
            'nama' => 'English Club',
            'deskripsi' => ' ekstrakurikuler yang mengajarkan tarian tradisional daerah yang melatih gerakan cepat dan sinkronisasi antar anggota.',
            'gambar' => 'englishh.jpeg',
        ]);

        Ekskul::create([
            'nama' => 'Futsal',
            'deskripsi' => 'olahraga yang mengasah keterampilan bermain bola di lapangan kecil dengan intensitas tinggi ',
            'gambar' => 'img11.jpg',
        ]);




    }
}
