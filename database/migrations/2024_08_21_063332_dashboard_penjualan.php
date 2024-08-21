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
        Schema::create('dashboard_penjualan', function (Blueprint $table) {
            $table->id();
            $table->string('harga');
            $table->string('faktur_penjualan');
            $table->string('daftar_piutang');
            $table->string('barang');
            $table->string('kode_penjualan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dashboard_penjualan');
    }
};
