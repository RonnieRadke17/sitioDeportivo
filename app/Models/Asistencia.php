<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected $table = 'Asistencia';
    protected $fillable = ['asistencia', 'Evento_id', 'Usuario_id'];

    public function evento()
    {
        return $this->belongsTo(Evento::class, 'Evento_id');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'Usuario_id');
    }
}
