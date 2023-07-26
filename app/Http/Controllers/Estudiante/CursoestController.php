<?php

namespace App\Http\Controllers\Estudiante;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CursoestController extends Controller
{
    public function index(){
        return inertia('Estudiante/Curso/Index');
    }
}
