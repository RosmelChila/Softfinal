<?php

namespace App\Http\Controllers\Docente;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CursoController extends Controller
{
   public function index(){
        $user = auth()->user(); // Asume que el usuario autenticado es un Docente
        $cursos = Curso::where('docente_id', $user->id)->get();
        // return $cursos;
        return Inertia::render('Docente/Curso/Index', [
            'cursos' => $cursos
        ]);
   }

   public function show($id)
    {
        $curso = Curso::with('tareas')->findOrFail($id);

        // Aquí $curso->tareas será una colección de tareas relacionadas con este curso.

        return Inertia::render('Docente/Curso/Show', [
            'curso' => $curso
        ]);
    }   
    
    public function tareacreate(){
        return inertia('Docente/Tarea/Create');
   }
}
