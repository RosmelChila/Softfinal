<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny',Admin::class);
        return Inertia::render('Admin/Dashboard');
    }

}
