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
        Schema::create('data_master', function (Blueprint $table) {
            $table->id();
            $table->string('data_kontak');
            $table->string('daftar_akun');
            $table->string('satuan_pengukuran');
            $table->string('data_gudang');
            $table->string('data_departemen');
            $table->string('data_project');
            $table->string('data_pajak');
            $table->string('data_hargatetap');
            $table->string('anggaran');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_master');
    }
};
