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
        Schema::create('docente__submaterias', function (Blueprint $table) {
          $table->unsignedBigInteger('id_docente');
    $table->unsignedBigInteger('id_submateria');
    $table->integer('anio_lectivo');
    $table->string('turno');

    $table->foreign('id_docente')->references('id_docente')->on('docentes');
    $table->foreign('id_submateria')->references('id_submateria')->on('submaterias');

    $table->primary(['id_docente', 'id_submateria', 'anio_lectivo', 'turno']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docente__submaterias');
    }
};
