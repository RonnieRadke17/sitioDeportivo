<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('Usuario_roles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Usuario_id');
            $table->unsignedBigInteger('Roles_id');
            
            $table->foreign('Usuario_id')->references('id')->on('Usuario')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('Roles_id')->references('id')->on('Roles')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('Usuario_roles');
    }
};
