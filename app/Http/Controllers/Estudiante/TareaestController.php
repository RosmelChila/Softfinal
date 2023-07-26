<?php

namespace App\Http\Controllers\Estudiante;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TareaestController extends Controller
{
    public function index(){
        return inertia('Estudiante/Tareaest/Index');
    }
}
