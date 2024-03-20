<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    /*relación con
    evento
    alumno
    y tiene otra tabla o un enum de Asistió o no asistió
    */
    public function up(): void
    {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('evento_id')->constrained('eventos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('alumno_id')->constrained('alumnos')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('asistencia', ['Asistió', 'No asistió']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asistencias');
    }
};
