<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $fillable=[
        'nombres',
        'apellido_paterno',
        'apellido_materno',
        'escuela_profesional',
        'codigo',
        'semestre',
        'correo',
        'celular',
        'user_id'
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }
    public function cursos()
    {
        return $this->belongsToMany(Curso::class);
    }
}
