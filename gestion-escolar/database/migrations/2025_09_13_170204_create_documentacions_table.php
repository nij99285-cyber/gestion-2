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
        Schema::create('documentacions', function (Blueprint $table) {
          $table->bigIncrements('id_documentacion');

    $table->unsignedBigInteger('id_estudiante');
    $table->foreign('id_estudiante')->references('id_estudiante')->on('estudiantes');

    $table->string('tipo_documento');
    $table->date('fecha_presentacion');
    $table->string('estado');
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentacions');
    }
};
