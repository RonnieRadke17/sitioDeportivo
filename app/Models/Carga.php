<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carga extends Model
{
    protected $table = 'Carga';
    protected $fillable = ['Grupo_id', 'Usuario_id'];

    public function grupo()
    {
        return $this->belongsTo(Grupo::class, 'Grupo_id');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'Usuario_id');
    }
}
