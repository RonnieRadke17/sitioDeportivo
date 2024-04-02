<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'Evento';
    protected $fillable = ['nombre', 'fecha', 'hora', 'capacidad', 'registrados', 'Lugar_id', 'Extracurricular_id', 'tipo_Evento_id'];

    public function lugar()
    {
        return $this->belongsTo(Lugar::class, 'Lugar_id');
    }

    public function extracurricular()
    {
        return $this->belongsTo(Extracurricular::class, 'Extracurricular_id');
    }

    public function tipoEvento()
    {
        return $this->belongsTo(TipoEvento::class, 'tipo_Evento_id');
    }

    public function asistencias()
    {
        return $this->hasMany(Asistencia::class, 'Evento_id');
    }
}
