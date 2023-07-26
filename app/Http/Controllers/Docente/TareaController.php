<?php

namespace App\Http\Controllers\Docente;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TareaController extends Controller
{
    public function create(){
        $cursos = Curso::all(); // Obtiene todos los cursos

        return Inertia::render('Docente/Tarea/Create', [
            'cursos' => $cursos
        ]);
    
    }
}
