<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol_Permiso extends Model
{
    protected $table = 'Rol_Permiso';
    protected $fillable = ['Roles_id', 'Permisos_id'];

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'Roles_id');
    }

    public function permiso()
    {
        return $this->belongsTo(Permiso::class, 'Permisos_id');
    }
}
