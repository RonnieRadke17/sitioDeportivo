<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('Rol_Permiso', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Roles_id');
            $table->unsignedBigInteger('Permisos_id');
            
            $table->foreign('Roles_id')->references('id')->on('Roles')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('Permisos_id')->references('id')->on('Permisos')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('Rol_Permiso');
    }
};
