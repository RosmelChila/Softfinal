<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'administradores';
    protected $fillable=[
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'correo',
        'celular',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    // public function cursos()
    // {
    //     return $this->hasMany(Curso::class);
    // }
}
