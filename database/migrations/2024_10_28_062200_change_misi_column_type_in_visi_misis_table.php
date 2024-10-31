<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('visi-_misis', function (Blueprint $table) {
            $table->text('misi')->change(); // Ubah kolom misi menjadi text
        });e
    }

    public function down(): void
    {
        Schema::table('visi-_misis', function (Blueprint $table) {
            $table->string('misi')->change(); // Kembalikan ke string jika rollback
        });
    }
};
