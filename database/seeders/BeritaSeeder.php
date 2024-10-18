<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita; // Impor model Beritaw

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        Berita::create([
            'title' => 'KUNJUNGAN PEJABAT KE SMK GEMA KARYA BAHANA',
            'description' => 'Kunjungan ini bertujuan untuk memberikan dukungan bagi kegiatan pendidikan di SMK Gema Karya Bahana. Para pejabat berbagi wawasan tentang peluang pasar kerja serta pentingnya kesiapan siswa dalam menghadapi dunia kerja yang kompetitif.',
            'gambar' => 'Picture1.png',
        ]);

        Berita::create([
            'title' => 'KUNJUNGAN BAPAK WALIKOTA BEKASI .',
            'description' => 'Kunjungan Bapak Walikota Bekasi ini bertujuan untuk mempererat hubungan antara pemerintah daerah dan SMK. Dalam acara tersebut, Walikota berbicara mengenai pentingnya pendidikan vokasi dan dukungan pemerintah untuk meningkatkan kualitas pendidikan di Bekasi.',
            'gambar' => 'Picture2.jpg',
        ]);

        Berita::create([
            'title' => 'Workshop Penyuluhan Narkoba Pionir & Workshop Self Grooming Mitra Medika.',
            'description' => 'Workshop ini bertujuan untuk memberikan pemahaman kepada siswa tentang bahaya narkoba serta pentingnya menjaga penampilan dan kesehatan diri. Narasumber dari Pionir dan Mitra Medika memberikan materi yang sangat relevan bagi siswa dalam menghadapi tantangan kesehatan di era modern.',
            'gambar' => 'Picture3.png',
        ]);

        Berita::create([
            'title' => 'Bekasi Campus Expo',
            'description' => 'Bekasi Campus Expo adalah ajang bagi siswa untuk mengenal lebih dekat berbagai universitas dan perguruan tinggi di sekitar Bekasi. Acara ini memberikan kesempatan bagi siswa untuk mendapatkan informasi tentang pilihan studi lanjut serta membangun relasi dengan institusi pendidikan tinggi.',
            'gambar' => 'Picture5.jpg',
        ]);

        Berita::create([
            'title' => 'KUNJUNGAN INDUSTRI KE PT OTSUKA AMERTA',
            'description' => 'Kunjungan industri ke PT Otsuka Amerta memberikan kesempatan kepada siswa untuk memahami proses produksi dan manajemen di perusahaan tersebut. Siswa belajar tentang alur kerja industri dan bagaimana teori yang mereka pelajari di sekolah diterapkan dalam dunia kerja nyata.',
            'gambar' => 'Picture6.jpg',
        ]);

        Berita::create([
            'title' => 'Workshop Pencegahan Pergaulan Bebas LGBT dan HIV/AIDS',
            'description' => 'Workshop ini diselenggarakan untuk memberikan edukasi kepada siswa mengenai bahaya pergaulan bebas, LGBT, dan HIV/AIDS. Narasumber menjelaskan dampak sosial dan kesehatan dari perilaku menyimpang serta memberikan tips untuk menjaga diri dari bahaya tersebut.',
            'gambar' => 'Picture7.jpg',
        ]);

        Berita::create([
            'title' => 'Workshop Career Day',
            'description' => 'Workshop Career Day ini memberikan siswa wawasan tentang berbagai profesi yang ada di pasar kerja. Siswa dibekali keterampilan dalam mencari pekerjaan, menghadapi wawancara, serta membangun karier di dunia yang semakin kompetitif.',
            'gambar' => 'Picture42.png',
        ]);

        // Tambahkan lebih banyak berita sesuai kebutuhan
    }
}
