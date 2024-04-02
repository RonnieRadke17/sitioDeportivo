<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('Evento', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 45)->nullable();
            $table->date('fecha')->nullable();
            $table->time('hora')->nullable();
            $table->integer('capacidad')->nullable();
            $table->integer('registrados')->nullable();
            $table->unsignedBigInteger('Lugar_id');
            $table->unsignedBigInteger('Extracurricular_id');
            $table->unsignedBigInteger('tipo_Evento_id');
            
            $table->foreign('Lugar_id')->references('id')->on('Lugar')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('Extracurricular_id')->references('id')->on('Extracurricular')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tipo_Evento_id')->references('id')->on('TipoEvento')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('Evento');
    }
};
