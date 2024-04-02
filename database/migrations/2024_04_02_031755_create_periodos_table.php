<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('Periodo', function (Blueprint $table) {
            $table->id();
            $table->date('inicio')->nullable();
            $table->date('fin')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Periodo');
    }
};
