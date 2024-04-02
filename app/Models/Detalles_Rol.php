<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalles_Rol extends Model
{
    protected $table = 'Detalles_Rol';
    protected $fillable = ['Usuario_id', 'Roles_id', 'matricula', 'Carrera_id'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'Usuario_id');
    }

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'Roles_id');
    }

    public function carrera()
    {
        return $this->belongsTo(Carrera::class, 'Carrera_id');
    }
}
