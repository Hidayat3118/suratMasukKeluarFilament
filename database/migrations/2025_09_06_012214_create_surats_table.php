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
        Schema::create('surats', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_surat')->nullable();
            $table->string('pengirim_surat')->nullable();
            $table->datetime('waktu_surat')->nullable();
            $table->string('lampiran_surat')->nullable();
            $table->string('perihal_surat')->nullable();
            $table->string('penerima_surat')->nullable();
            $table->text('isi_surat')->nullable();
            $table->string('tempat_surat')->nullable();
            $table->enum('jenis_surat', ['masuk', 'keluar'])->nullable();
            $table->foreignId('unit_penerbit_id')->constrained()->onDelete('cascade');
            $table->foreignId('pengesah_id')->constrained()->onDelete('cascade');
            // $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surats');
    }
};
