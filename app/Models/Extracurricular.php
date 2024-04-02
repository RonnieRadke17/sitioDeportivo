<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extracurricular extends Model
{
    protected $table = 'Extracurricular';
    protected $fillable = ['nombre', 'Categoria_id'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'Categoria_id');
    }

    public function evento()
    {
        return $this->hasMany(Evento::class, 'Extracurricular_id');
    }

    public function grupo()
    {
        return $this->hasMany(Grupo::class, 'Extracurricular_id');
    }
}
