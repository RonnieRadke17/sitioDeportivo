<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('Lugar', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 45)->nullable();
            $table->string('direccion', 45)->nullable();
            $table->float('latitud')->nullable();
            $table->float('longitud')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Lugar');
    }
};
