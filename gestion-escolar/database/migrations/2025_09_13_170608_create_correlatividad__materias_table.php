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
        Schema::create('correlatividad__materias', function (Blueprint $table) {
              $table->unsignedBigInteger('id_materia');
    $table->unsignedBigInteger('id_materia_requisito');
    $table->enum('tipo', ['Cursado', 'Aprobada']);

    $table->foreign('id_materia')->references('id_materia')->on('materias');
    $table->foreign('id_materia_requisito')->references('id_materia')->on('materias');

    $table->primary(['id_materia', 'id_materia_requisito']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('correlatividad__materias');
    }
};
