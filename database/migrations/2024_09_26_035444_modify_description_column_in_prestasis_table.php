<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('prestasis', function (Blueprint $table) {
            $table->string('description')->nullable()->change(); // Ubah kolom menjadi nullable
        });
    }

    public function down()
    {
        Schema::table('prestasis', function (Blueprint $table) {
            $table->string('description')->nullable(false)->change(); // Kembalikan jika rollback
        });
    }
};
