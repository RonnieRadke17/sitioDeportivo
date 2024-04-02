<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('Asistencia', function (Blueprint $table) {
            $table->id();
            $table->enum('asistencia', ['A', 'NA'])->nullable();
            $table->unsignedBigInteger('Evento_id');
            $table->unsignedBigInteger('Usuario_id');
            
            $table->foreign('Evento_id')->references('id')->on('Evento')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('Usuario_id')->references('id')->on('Usuario')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('Asistencia');
    }
};
