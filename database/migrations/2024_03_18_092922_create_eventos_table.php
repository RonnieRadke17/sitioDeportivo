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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->date('fecha');
            $table->time('hora');
             $table->string('descripcion');
            $table->string('imagen');//imagen representativa
            $table->integer('capacidad');
            $table->integer('registrados');
            //extracurricular define el evento y serviria para las consultas
            $table->foreignId('extracurricular_id')->constrained('extracurriculares')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('tipoEvento_id')->constrained('tipo_de_eventos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('lugar_id')->constrained('lugares')->onUpdate('cascade')->onDelete('cascade');
            //capacidad registrados
            //contemplar que dependiendo del tipo de evento es la capacidad
            //si es interno no hay capacidad limite para que no halla problema
            //aqui va referencia a la tabla de tipos de evento
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
