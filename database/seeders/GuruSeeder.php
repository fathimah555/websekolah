<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB; 
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
            ['jabatan' => 'Kepala Sekolah', 'gambar' => 'kepala sekolahh.png', 'tipe' => 'struktur']
        );

        DB::table('gurus')->updateOrInsert(
            ['nama' => 'Nailil Muna Atalyna, S.S, M. Pd'],
            ['jabatan' => 'Wakil Kepala Sekolah', 'gambar' => 'wakil 1.png', 'tipe' => 'struktur']
    );
        DB::table('gurus')->updateOrInsert(
            ['nama' => 'Eka  Sudiyanti, M. Pd'],
            ['jabatan' => 'Waka. Bid. SarPras', 'gambar' => 'wakil 2.png', 'tipe' => 'struktur']
        );

        DB::table('gurus')->updateOrInsert(
            ['nama' => 'Dede Taufik A, S.Si, M.Pd'],
            ['jabatan' => 'Waka. Bid. Hubind', 'gambar' => 'wakil 3.png', 'tipe' => 'struktur']
    );
        DB::table('gurus')->updateOrInsert(
            ['nama' => 'Adrian A. Md. Kom'],
            ['jabatan' => 'Waka. Bid. Kesiswaan', 'gambar' => 'wakil 4.png', 'tipe' => 'struktur']
        );

        DB::table('gurus')->updateOrInsert(
            ['nama' => 'Wardah Ulfah F, S. Pd'],
            ['jabatan' => 'Staf Kurikulum', 'gambar' => 'staf 1.png', 'tipe' => 'struktur']
    );
        DB::table('gurus')->updateOrInsert(
            ['nama' => 'Susilo Agus, S.T'],
            ['jabatan' => 'KA. Prog TSM', 'gambar' => 'staf 2.png', 'tipe' => 'struktur']
        );

        DB::table('gurus')->updateOrInsert(
            ['nama' => 'Andriyanne M, S. Kom'],
            ['jabatan' => 'KA. Prog TKJ', 'gambar' => 'staf 3.png', 'tipe' => 'struktur']
    );

        DB::table('gurus')->updateOrInsert(
            ['nama' => 'Rosa Amelia A, M. Pd'],
            ['jabatan' => 'KA. Prog AK', 'gambar' => 'staf 4.png', 'tipe' => 'struktur']
    );

        DB::table('gurus')->updateOrInsert(
            ['nama' => 'H. Maswan'],
            ['jabatan' => 'Staf SarPras', 'gambar' => 'staf 5.png', 'tipe' => 'struktur']
    );

        DB::table('gurus')->updateOrInsert(
            ['nama' => 'Septian Basharah, S. Kom'],
            ['jabatan' => 'Pembina Osis', 'gambar' => 'staf 6.png', 'tipe' => 'struktur']
    );

        DB::table('gurus')->updateOrInsert(
            ['nama' => 'Indah Nur T,S. Pd'],
            ['jabatan' => 'BK Kelas X', 'gambar' => 'staf 7.png', 'tipe' => 'struktur']
    );
        DB::table('gurus')->updateOrInsert(
            ['nama' => 'Adi Wahyudianto, S. Pd'],
            ['jabatan' => 'BK Kelas XI', 'gambar' => 'staf 8.png', 'tipe' => 'struktur']
    );


    }
}
