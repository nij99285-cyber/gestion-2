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
        Schema::create('cursos', function (Blueprint $table) {
             $table->bigIncrements('id_curso');
    $table->string('nombre');
    $table->string('turno');
    $table->integer('anio_lectivo');

    $table->unsignedBigInteger('id_modulo');
    $table->foreign('id_modulo')->references('id_modulo')->on('modulos');

    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
