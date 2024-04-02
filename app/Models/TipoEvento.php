<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEvento extends Model
{
    protected $table = 'TipoEvento';
    protected $fillable = ['nombre'];

    public function eventos()
    {
        return $this->hasMany(Evento::class, 'tipo_Evento_id');
    }
}
