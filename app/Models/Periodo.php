<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    protected $table = 'Periodo';
    protected $fillable = ['inicio', 'fin'];

    public function grupos()
    {
        return $this->hasMany(Grupo::class, 'Periodo_id');
    }
}
