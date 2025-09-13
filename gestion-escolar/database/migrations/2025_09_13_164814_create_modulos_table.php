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
        Schema::create('modulos', function (Blueprint $table) {
         $table->bigIncrements('id_modulo');
    $table->string('nombre');
    $table->integer('orden');
    $table->integer('anio_correspondiente');

    $table->unsignedBigInteger('id_plan_estudio');
    $table->foreign('id_plan_estudio')->references('id_plan_estudio')->on('plan_estudios');

    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modulos');
    }
};
