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
        Schema::create('penjualan', function (Blueprint $table) {
            $table->id();
            $table->string('penawaran_harga');
            $table->string('pesanan_penjualan');
            $table->string('pengiriman_barang');
            $table->string('faktur_penjualan');
            $table->string('daftar_piutangusaha');
            $table->string('pembayaran_piutangusaha');
            $table->string('pengembalian_lebihbarang');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penjualan');
    }
};
