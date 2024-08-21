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
        Schema::create('rasio_finance', function (Blueprint $table) {
            $table->id();
            $table->string('rasio_kes_keuangan');
            $table->string('rasio_profitabilitas');
            $table->string('rasio_likuiditas');
            $table->string('rasio_efesiensi_ops');
            $table->string('rasio_solvabilitas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rasio_finance');
    }
};
