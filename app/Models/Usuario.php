<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'Usuario';
    protected $fillable = ['nombre', 'paterno', 'materno', 'correo', 'password'];

    public function roles()
    {
        return $this->belongsToMany(Roles::class, 'Usuario_roles', 'Usuario_id', 'Roles_id');
    }

    public function detallesRol()
    {
        return $this->hasMany(DetallesRol::class, 'Usuario_id');
    }

    public function asistencias()
    {
        return $this->hasMany(Asistencia::class, 'Usuario_id');
    }

    public function cargas()
    {
        return $this->hasMany(Carga::class, 'Usuario_id');
    }
}
