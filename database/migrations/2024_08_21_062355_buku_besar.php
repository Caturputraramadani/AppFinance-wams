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
        Schema::create('buku_besar', function (Blueprint $table) {
            $table->id();
            $table->string('buku_besar');
            $table->string('jurnal_umum');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('buku_besar');
    }
};
