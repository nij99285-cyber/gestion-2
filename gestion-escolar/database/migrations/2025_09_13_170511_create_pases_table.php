<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pases', function (Blueprint $table) {
          $table->bigIncrements('id_pase');

    $table->unsignedBigInteger('id_estudiante');
    $table->foreign('id_estudiante')->references('id_estudiante')->on('estudiantes');

    $table->string('institucion_origen');
    $table->date('fecha_pase');
    $table->text('observaciones')->nullable();
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pases');
    }
};
