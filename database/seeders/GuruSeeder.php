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
            ['jabatan' => 'Kepala Sekolah', 'gambar' => 'assets/images/kepalasekolahh.png', 'tipe' => 'struktur']
        );

        DB::table('gurus')->updateOrInsert(
            ['nama' => 'Nailil Muna Atalyna, S.S, M. Pd'],
            ['jabatan' => 'Wakil Kepala Sekolah', 'gambar' => 'assets/images/wakil1.png', 'tipe' => 'struktur']
    );
        DB::table('gurus')->updateOrInsert(
            ['nama' => 'Eka  Sudiyanti, M. Pd'],
            ['jabatan' => 'Waka. Bid. SarPras', 'gambar' => 'assets/images/wakil2.png', 'tipe' => 'struktur']
        );

        DB::table('gurus')->updateOrInsert(
            ['nama' => 'Dede Taufik A, S.Si, M.Pd'],
            ['jabatan' => 'Waka. Bid. Hubind', 'gambar' => 'assets/images/wakil3.png', 'tipe' => 'struktur']
    );
        DB::table('gurus')->updateOrInsert(
            ['nama' => 'Adrian A. Md. Kom'],
            ['jabatan' => 'Waka. Bid. Kesiswaan', 'gambar' => 'assets/images/wakil4.png', 'tipe' => 'struktur']
        );

        DB::table('gurus')->updateOrInsert(
            ['nama' => 'Wardah Ulfah F, S. Pd'],
            ['jabatan' => 'Staf Kurikulum', 'gambar' => 'assets/images/staf1.png', 'tipe' => 'struktur']
    );
        DB::table('gurus')->updateOrInsert(
            ['nama' => 'Susilo Agus, S.T'],
            ['jabatan' => 'KA. Prog TSM', 'gambar' => 'assets/images/staf2.png', 'tipe' => 'struktur']
        );

        DB::table('gurus')->updateOrInsert(
            ['nama' => 'Andriyanne M, S. Kom'],
            ['jabatan' => 'KA. Prog TKJ', 'gambar' => 'assets/images/staf3.png', 'tipe' => 'struktur']
    );

        DB::table('gurus')->updateOrInsert(
            ['nama' => 'Rosa Amelia A, M. Pd'],
            ['jabatan' => 'KA. Prog AK', 'gambar' => 'assets/images/staf4.png', 'tipe' => 'struktur']
    );

        DB::table('gurus')->updateOrInsert(
            ['nama' => 'H. Maswan'],
            ['jabatan' => ' SarPras', 'gambar' => 'assets/images/staf5.png', 'tipe' => 'struktur']
    );

        DB::table('gurus')->updateOrInsert(
            ['nama' => 'Septian Basharah, S. Kom'],
            ['jabatan' => 'Pembina Osis', 'gambar' => 'assets/images/staf6.png', 'tipe' => 'struktur']
    );

        DB::table('gurus')->updateOrInsert(
            ['nama' => 'Indah Nur T,S. Pd'],
            ['jabatan' => 'BK Kelas X', 'gambar' => 'assets/images/staf7.png', 'tipe' => 'struktur']
    );
        DB::table('gurus')->updateOrInsert(
            ['nama' => 'Adi Wahyudianto, S. Pd'],
            ['jabatan' => 'BK Kelas XI', 'gambar' => 'assets/images/staf8.png', 'tipe' => 'struktur']
    );
    DB::table('gurus')->updateOrInsert(
        ['nama' => 'RT Sinta W, S. Pd'],
        ['jabatan' => 'Pembina Rohis', 'gambar' => 'assets/images/staf9.png', 'tipe' => 'struktur']
    );
    DB::table('gurus')->updateOrInsert(
        ['nama' => 'Mei Wulan N , S. Psi'],
        ['jabatan' => 'BP-BK', 'gambar' => 'assets/images/', 'tipe' => 'struktur']
    );
    DB::table('gurus')->updateOrInsert(
        ['nama' => 'M. Tamtomo, ST'],
        ['jabatan' => 'Ketua BKK', 'gambar' => 'assets/images/', 'tipe' => 'struktur']
    );
    DB::table('gurus')->updateOrInsert(
        ['nama' => 'M. Tarkim R'],
        ['jabatan' => 'Staf Hubind', 'gambar' => 'assets/images/', 'tipe' => 'struktur']
    );

    }
}
