<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table = 'Carrera';
    protected $fillable = ['nombre'];

    public function detallesRol()
    {
        return $this->hasMany(DetallesRol::class, 'Carrera_id');
    }
}
