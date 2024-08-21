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
        Schema::create('neraca_saldo', function (Blueprint $table) {
            $table->id();
            $table->string('pengeluaran');
            $table->string('penerimaan');
            $table->string('kas');
            $table->string('recon');
            $table->string('giro_masuk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('neraca_saldo');
    }
};
