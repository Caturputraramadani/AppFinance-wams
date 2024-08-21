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
        Schema::create('risk_management', function (Blueprint $table) {
            $table->id();
            $table->string('identifikasi_risiko');
            $table->string('analisis_risiko');
            $table->string('evaluasi_risiko');
            $table->string('pengendalian_risiko');
            $table->string('risk_assessment_matrix');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('risk_management');
    }
};
