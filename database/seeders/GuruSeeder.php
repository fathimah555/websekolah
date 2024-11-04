<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Support\Facades\DB; 
use Illuminate\Database\Seeder;


class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('gurus')->updateOrInsert(
            ['nama' => 'Muthmainah, S. Pd'],
            ['jabatan' => 'Kepala Sekolah', 'gambar' => 'kepalasekolahh.png', 'tipe' => 'struktur']
        );

        DB::table('gurus')->updateOrInsert(
            ['nama' => 'Nailil Muna Atalyna, S.S, M. Pd'],
            ['jabatan' => 'Wakil Kepala Sekolah', 'gambar' => 'wakil1.png', 'tipe' => 'struktur']
    );
        DB::table('gurus')->updateOrInsert(
            ['nama' => 'Eka  Sudiyanti, M. Pd'],
            ['jabatan' => 'Waka. Bid. SarPras', 'gambar' => 'wakil2.png', 'tipe' => 'struktur']
        );

        DB::table('gurus')->updateOrInsert(
            ['nama' => 'Dede Taufik A, S.Si, M.Pd'],
            ['jabatan' => 'Waka. Bid. Hubind', 'gambar' => 'wakil3.png', 'tipe' => 'struktur']
    );
        DB::table('gurus')->updateOrInsert(
            ['nama' => 'Adrian A. Md. Kom'],
            ['jabatan' => 'Waka. Bid. Kesiswaan', 'gambar' => 'wakil4.png', 'tipe' => 'struktur']
        );

        DB::table('gurus')->updateOrInsert(
            ['nama' => 'Wardah Ulfah F, S. Pd'],
            ['jabatan' => 'Staf Kurikulum', 'gambar' => 'staf1.png', 'tipe' => 'struktur']
    );
        DB::table('gurus')->updateOrInsert(
            ['nama' => 'Susilo Agus, S.T'],
            ['jabatan' => 'KA. Prog TSM', 'gambar' => 'staf2.png', 'tipe' => 'struktur']
        );

        DB::table('gurus')->updateOrInsert(
            ['nama' => 'Andriyanne M, S. Kom'],
            ['jabatan' => 'KA. Prog TKJ', 'gambar' => 'staf3.png', 'tipe' => 'struktur']
    );

        DB::table('gurus')->updateOrInsert(
            ['nama' => 'Rosa Amelia A, M. Pd'],
            ['jabatan' => 'KA. Prog AK', 'gambar' => 'staf4.png', 'tipe' => 'struktur']
    );

        DB::table('gurus')->updateOrInsert(
            ['nama' => 'H. Maswan'],
            ['jabatan' => 'Staf SarPras', 'gambar' => 'staf5.png', 'tipe' => 'struktur']
    );

        DB::table('gurus')->updateOrInsert(
            ['nama' => 'Septian Basharah, S. Kom'],
            ['jabatan' => 'Pembina Osis', 'gambar' => 'staf6.png', 'tipe' => 'struktur']
    );

        DB::table('gurus')->updateOrInsert(
            ['nama' => 'Indah Nur T,S. Pd'],
            ['jabatan' => 'BK Kelas X', 'gambar' => 'staf7.png', 'tipe' => 'struktur']
    );
        DB::table('gurus')->updateOrInsert(
            ['nama' => 'Adi Wahyudianto, S. Pd'],
            ['jabatan' => 'BK Kelas XI', 'gambar' => 'staf8.png', 'tipe' => 'struktur']
    );


    }
}
