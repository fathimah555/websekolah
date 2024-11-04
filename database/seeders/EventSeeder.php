<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event; // Pastikan model Event sudah ada

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'title' => 'Projek Penguatan Profil Pelajar Pancasila (P5)',
            'date' => '2024-03-08',
            'gambar' => 'Picture17.jpg',
        ]);

        Event::create([
            'title' => 'PEMBUKAAN JOB FAIR PERTAMA KALI SMK GEMA KARYA BAHANA',
            'date' => '2024-03-08',
            'gambar' => 'Picture18.png',
        ]);
    
        Event::create([
            'title' => 'Workshop Career Day',
            'date' => '2024-03-08',
            'gambar' => 'Picture52.jpg',
        ]);

        Event::create([
            'title' => 'ClassMeeting 2024',
            'date' => '2024-06-26',
            'gambar' => 'img9.JPG',
        ]);
    
        
        Event::create([
            'title' => 'Maulid Nabi Muhammad SAW',
            'date' => '2024-03-08',
            'gambar' => 'img10.JPG',
        ]);

        Event::create([
            'title' => 'Hari Sumpah Pemuda',
            'date' => '2024-10-28',
            'gambar' => 'img12.JPG',
        ]);

        Event::create([
            'title' => 'Lomba 17 Agustus',
            'date' => '2024-08-16',
            'gambar' => 'img13.JPG',
        ]);
    }
}
