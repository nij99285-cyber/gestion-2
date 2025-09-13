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
        Schema::create('estudiante__materias', function (Blueprint $table) {
              $table->unsignedBigInteger('id_estudiante');
    $table->unsignedBigInteger('id_materia');
    $table->decimal('nota_final', 4, 2)->nullable();
    $table->enum('estado', ['Cursando', 'Aprobada', 'Previa', 'Libre']);
    $table->date('fecha_evaluacion')->nullable();

    $table->foreign('id_estudiante')->references('id_estudiante')->on('estudiantes');
    $table->foreign('id_materia')->references('id_materia')->on('materias');

    $table->primary(['id_estudiante', 'id_materia']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiante__materias');
    }
};
