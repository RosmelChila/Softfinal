<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'docente_id',
        // 'administrador_id',
    ];

    public function docente(){
        return $this->belongsTo(Docente::class);
    }

    // public function administrador(){
    //     return $this->belongsTo(Admin::class);
    // }
    public function estudiantes()
    {
        return $this->belongsToMany(Estudiante::class);
    }

    public function tareas()
    {
        return $this->hasMany(Tarea::class);
    }
}
