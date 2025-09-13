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
        Schema::create('estudiante__submaterias', function (Blueprint $table) {
            $table->unsignedBigInteger('id_estudiante');
    $table->unsignedBigInteger('id_submateria');
    $table->decimal('nota_final', 4, 2)->nullable();
    $table->enum('estado', ['Cursando', 'Aprobada', 'Previa']);
    $table->date('fecha_evaluacion')->nullable();

    $table->foreign('id_estudiante')->references('id_estudiante')->on('estudiantes');
    $table->foreign('id_submateria')->references('id_submateria')->on('submaterias');

    $table->primary(['id_estudiante', 'id_submateria']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiante__submaterias');
    }
};
