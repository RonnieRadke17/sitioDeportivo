<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = 'Grupo';
    protected $fillable = ['nombreGrupo_id', 'Periodo_id', 'Extracurricular_id', 'status'];

    public function nombreGrupo()
    {
        return $this->belongsTo(NombreGrupo::class, 'nombreGrupo_id');
    }

    public function periodo()
    {
        return $this->belongsTo(Periodo::class, 'Periodo_id');
    }

    public function extracurricular()
    {
        return $this->belongsTo(Extracurricular::class, 'Extracurricular_id');
    }

    public function cargas()
    {
        return $this->hasMany(Carga::class, 'Grupo_id');
    }
}
