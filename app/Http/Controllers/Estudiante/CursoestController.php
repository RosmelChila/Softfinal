<?php

namespace App\Http\Controllers\Estudiante;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CursoestController extends Controller
{
    public function index(){
        return inertia('Estudiante/Curso/Index');
    }
}
