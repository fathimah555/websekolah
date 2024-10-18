<?php

namespace Database\Seeders;

use App\Models\Prestasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrestasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Prestasi::create([
            'title' => 'LOMBA TARI JUARA 1 TINGKAT SMK SE KOTA BEKASI.',
            'date' => '2024-03-08',
            'gambar' => 'Picture24.jpg', // Atau path gambar yang valid
            // 'description' => 'prestasi yang luar biasa', // Hapus     atau tambahkan jika kolom ada
        ]);

        Prestasi::create([
            'title' => 'JUARA 3 OLIMPIADE AKUNTANSI DAN PERPAJAKAN.',
            'date' => '2024-03-08',
            'gambar' => 'Picture41.jpg', // Atau path gambar yang valid
            // 'description' => 'prestasi yang luar biasa', // Hapus atau tambahkan jika kolom ada
        ]);

        Prestasi::create([
            'title' => 'JUARA 2 AMBASSADOR BUSINESS ENTREPRENEUR.',
            'date' => '2024-03-08',
            'gambar' => 'Picture26.jpg', // Atau path gambar yang valid
            // 'description' => 'prestasi yang luar biasa', // Hapus atau tambahkan jika kolom ada
        ]);

        
        Prestasi::create([
            'title' => 'LOMBA TYPHOGRAPHY (BASKET) JUARA 2 PUTRA.',
            'date' => '2024-03-08',
            'gambar' => 'Picture27.jpg', // Atau path gambar yang valid
            // 'description' => 'prestasi yang luar biasa', // Hapus atau tambahkan jika kolom ada
        ]);

        Prestasi::create([
            'title' => 'LOMBA TYPHOGRAPHY (BASKET) JUARA 3 PUTRI.',
            'date' => '2024-03-08',
            'gambar' => 'Picture28.jpg', // Atau path gambar yang valid
            // 'description' => 'prestasi yang luar biasa', // Hapus atau tambahkan jika kolom ada
        ]);

        
        Prestasi::create([
            'title' => 'LOMBA TARI JUARA 3 DINAS PARIWISATA DAN KEBUDAYAAN KOTA BEKASI.',
            'date' => '2024-03-08',
            'gambar' => 'Picture29.jpg', // Atau path gambar yang valid
            // 'description' => 'prestasi yang luar biasa', // Hapus atau tambahkan jika kolom ada
        ]);
    }
}
