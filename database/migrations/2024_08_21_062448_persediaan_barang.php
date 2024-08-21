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
        Schema::create('persediaan_barang', function (Blueprint $table) {
            $table->id();
            $table->string('data_produk');
            $table->string('penyesuaian_barang');
            $table->string('stak_opnam');
            $table->string('pindah_gudang');
            $table->string('produksi');
            $table->string('formula_produksi');
            $table->string('konsinya_barangkeluar');
            $table->string('pemakaian_persediaan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('persediaan_barang');
    }
};
