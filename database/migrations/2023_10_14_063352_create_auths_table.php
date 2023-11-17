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
        Schema::create('table_users', function (Blueprint $table) {
            $table->string('username', 50)->nullable(false)->primary();
            $table->text('password')->nullable (false);
            $table->text('foto')->nullable (false);
            $table->enum('role', ['admin', 'operator', 'warga']); 
        });https://www.msn.com/id-id/berita/other/dulu-banggakan-gaji-rully-yang-sampai-rp200-juta-dewi-perssik-gigit-jari-tahu-pacar-pilotnya-kepergok-peluk-wanita-lain-di-bali-tahajud-sekian-malam/ar-AA1jXN2R?cvid=26694879074044789080cd38ff7cb0cf
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auths');
    }
};
