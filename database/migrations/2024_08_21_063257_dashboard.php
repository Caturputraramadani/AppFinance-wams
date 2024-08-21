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
        Schema::create('dashboard', function (Blueprint $table) {
            $table->id();
            $table->string('dashboard_penjualan');
            $table->string('neraca_saldo');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dashboard');
    }
};
