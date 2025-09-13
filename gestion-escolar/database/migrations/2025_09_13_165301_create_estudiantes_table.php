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
        Schema::create('estudiantes', function (Blueprint $table) {
         
$table->bigIncrements('id_estudiante');
    $table->string('nombre');
    $table->string('apellido');
    $table->string('dni')->unique();
    $table->date('fecha_nacimiento');
    $table->string('escuela_origen')->nullable();
    $table->integer('anio_ingreso');
    $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
