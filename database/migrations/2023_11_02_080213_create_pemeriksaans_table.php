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
        Schema::create('pemeriksaans', function (Blueprint $table) {
            $table->char('id_pemeriksaan', 5)->nullable(false)->primary();
            $table->char('nomor_petugas', 5)->nullable(false);
            $table->char('id_anak', 5)->nullable(false);
            $table->date('tanggal_pemeriksaans')->nullable(false);
            $table->integer('umur', false)->nullable(false);
            $table->enum('asi_esklusif', ['lancar', 'jarang', 'tidak_sama_sekali'])->nullable(false);
            $table->enum('N/T', ['naik', 'tidak naik'])->nullable(false);
            $table->integer('berat_badan', false)->nullable(false);
            $table->integer('tinggi_badan', false)->nullable(false);
            $table->integer('lingkar_kepala', false)->nullable(false);
    
            $table->foreign('nomor_petugas')->on('kaders')->references('nomor_petugas')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('id_anak')->on('anaks')->references('id_anak')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemeriksaans');
    }

};