<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('TipoEvento', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 45)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('TipoEvento');
    }
};
