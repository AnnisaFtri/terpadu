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
        Schema::create('logs', function (Blueprint $table) {
            $table->char('id_logs', 5)->nullable(false)->primary();
            $table->string('table', 250)->nullable(false);
            $table->enum('role',['kader', 'sekretaris','kepala_keluarga']);
            $table->date('tanggal');
            $table->enum('aksi', ['jenis_pelayanan', 'pemeriksaan']);
            $table->string('record', 250);
            $table->time('jam');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs');
    }
};