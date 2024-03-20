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
        //aqui tiene relación con 
        /*nombreGrupos ya
        periodos, ya
        profesores, ya
        extracurriculares, ya
        horario, ya
        carga tiene id de grupo y de alumno
        */
        Schema::create('grupos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nombreGrupo_id')->constrained('nombre_grupos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('extracurricular_id')->constrained('extracurriculares')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('profesor_id')->constrained('profesores')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('periodo_id')->constrained('periodos')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupos');
    }
};
