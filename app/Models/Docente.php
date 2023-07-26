<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;
    protected $fillable=[
        'nombres',
        'apellido_paterno',
        'apellido_materno',
        'codigo',
        'correo',
        'celular',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function cursos()
    {
        return $this->hasMany(Curso::class);
    }
}
