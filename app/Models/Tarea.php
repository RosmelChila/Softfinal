<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;
    protected $fillable=[
        'nombre',
        'descripcion',
        'archivo',
        'nota_maxima',
        'num_intentos',
        'fecha_vencimiento',
        'curso_id'
    ];
    public function curso(){
        return $this->belongsTo(Curso::class);
    }
}
