<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = 'Roles';
    protected $fillable = ['nombre'];

    public function usuarios()
    {
        return $this->belongsToMany(Usuario::class, 'Usuario_roles', 'Roles_id', 'Usuario_id');
    }

    public function permisos()
    {
        return $this->belongsToMany(Permiso::class, 'Rol_Permiso', 'Roles_id', 'Permisos_id');
    }
}
