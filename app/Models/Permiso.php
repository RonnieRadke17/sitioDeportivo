<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $table = 'Permisos';
    protected $fillable = ['nombre'];

    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'Rol_Permiso', 'Permisos_id', 'Roles_id');
    }
}
