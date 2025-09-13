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
        Schema::create('estudiante__cursos', function (Blueprint $table) {
           $table->unsignedBigInteger('id_estudiante');
    $table->unsignedBigInteger('id_curso');
    $table->integer('anio_lectivo');
    $table->enum('estado', ['Cursando', 'Aprobado', 'Abandono']);

    $table->foreign('id_estudiante')->references('id_estudiante')->on('estudiantes');
    $table->foreign('id_curso')->references('id_curso')->on('cursos');

    $table->primary(['id_estudiante', 'id_curso', 'anio_lectivo']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiante__cursos');
    }
};
