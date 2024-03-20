<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exracurriculares extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'categoria_id',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'categoria_id');
    }

}
