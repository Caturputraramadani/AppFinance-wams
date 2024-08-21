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
        Schema::create('kas_bank', function (Blueprint $table) {
            $table->id();
            $table->string('pengeluaran');
            $table->string('uangmuka_pengeluaran');
            $table->string('penerimaan');
            $table->string('uangmuka_penerimaan');
            $table->string('transfer_kas');
            $table->string('recon');
            $table->string('giro_masuk');
            $table->string('giro_keluar');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kas_bank');
    }
};
