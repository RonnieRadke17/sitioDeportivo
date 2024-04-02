<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('Grupo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nombreGrupo_id');
            $table->unsignedBigInteger('Periodo_id');
            $table->unsignedBigInteger('Extracurricular_id');
            $table->enum('status', ['A', 'NA'])->nullable()->default('A');
            
            $table->foreign('nombreGrupo_id')->references('id')->on('NombreGrupo')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('Periodo_id')->references('id')->on('Periodo')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('Extracurricular_id')->references('id')->on('Extracurricular')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('Grupo');
    }
};
