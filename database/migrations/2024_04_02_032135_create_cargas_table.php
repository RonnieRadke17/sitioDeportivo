<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('Carga', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Grupo_id');
            $table->unsignedBigInteger('Usuario_id');
            
            $table->foreign('Grupo_id')->references('id')->on('Grupo')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('Usuario_id')->references('id')->on('Usuario')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('Carga');
    }
};
