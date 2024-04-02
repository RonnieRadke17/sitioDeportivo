<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    protected $table = 'Lugar';
    protected $fillable = ['nombre', 'direccion', 'latitud', 'longitud'];

    public function eventos()
    {
        return $this->hasMany(Evento::class, 'Lugar_id');
    }
}
