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
        Schema::create('daftar_periksa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // pasien
            $table->foreignId('dokter_id')->constrained('users')->onDelete('cascade'); // dokter
            $table->text('keluhan');
            $table->date('tanggal_periksa')->nullable(); // bisa diisi otomatis atau manual
            $table->string('status')->default('Menunggu'); // Menunggu / Diterima / Ditolak
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_periksa');
    }
};
