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
        Schema::create('materia__submaterias', function (Blueprint $table) {
            $table->unsignedBigInteger('id_materia');
    $table->unsignedBigInteger('id_submateria');

    $table->foreign('id_materia')->references('id_materia')->on('materias');
    $table->foreign('id_submateria')->references('id_submateria')->on('submaterias');

    $table->primary(['id_materia', 'id_submateria']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materia__submaterias');
    }
};
