<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NombreGrupo extends Model
{
    protected $table = 'NombreGrupo';
    protected $fillable = ['nombre'];

    public function grupos()
    {
        return $this->hasMany(Grupo::class, 'nombreGrupo_id');
    }
}
