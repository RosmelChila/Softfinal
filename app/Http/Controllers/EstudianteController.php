<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EstudianteController extends Controller
{
    public function index(){
        $this->authorize('viewAny',Estudiante::class);
        return Inertia::render('Estudiante/Dashboard');
    }
    
}
