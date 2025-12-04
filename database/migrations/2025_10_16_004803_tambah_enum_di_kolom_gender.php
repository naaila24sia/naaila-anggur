<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('pelanggan', function (Blueprint $table) {
            // Mengubah tipe kolom menjadi ENUM baru dan membuatnya nullable
            $table->string('gender')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pelanggan', function (Blueprint $table) {
            // Contoh kembali ke ENUM lama (jika kita tahu nilainya)
            $table->enum('gender', ['Male', 'Female', 'Other'])->nullable()->change();
        });
    }
};
