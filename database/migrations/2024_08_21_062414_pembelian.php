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
        Schema::create('pembelian', function (Blueprint $table) {
            $table->id();
            $table->string('pengajuan_pembelian');
            $table->string('permintaan_penawaran');
            $table->string('pesanan_pembelian');
            $table->string('penerimaan_barang');
            $table->string('retur_pembelian');
            $table->string('daftar_utangusaha');
            $table->string('pembayaran_utangusaha');
            $table->string('penerima_lebihbayar');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pembelian');
    }
};
