<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario_roles extends Model
{
    protected $table = 'Usuario_roles';
    protected $fillable = ['Usuario_id', 'Roles_id'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'Usuario_id');
    }

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'Roles_id');
    }
}
