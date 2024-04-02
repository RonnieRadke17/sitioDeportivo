<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('Extracurricular', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 45)->nullable();
            $table->unsignedBigInteger('Categoria_id');
            $table->foreign('Categoria_id')->references('id')->on('Categoria')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('Extracurricular');
    }
};
