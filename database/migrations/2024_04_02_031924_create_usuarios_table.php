<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('Usuario', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 45);
            $table->string('paterno', 45);
            $table->string('materno', 45);
            $table->string('correo', 45);
            $table->string('password', 45);
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Usuario');
        Schema::dropIfExists('sessions');
    }
};
