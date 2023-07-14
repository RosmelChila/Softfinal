<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DocenteController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny',Docente::class);
        return Inertia::render('Docente/Dashboard');
    }

}
