<?php

use App\Http\Controllers\Docente\CursoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Administrador\UsuarioController;
use App\Http\Controllers\Docente\TareaController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\Estudiante\CursoestController;
use App\Http\Controllers\Estudiante\TareaestController;
use App\Http\Controllers\EstudianteController;
use App\Models\User;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\SocialController;
use App\Models\Docente;
use App\Models\Estudiante;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', [AdminController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('Docente/dashboard', [DocenteController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard.docente');
Route::get('Estudiante/dashboard', [EstudianteController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard.estudiante');

Route::middleware('auth')->group(function () {
    Route::get('/about', fn () => Inertia::render('About'))->name('about');

    Route::get('users', [UserController::class, 'index'])->name('users.index');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //para docentes
    Route::get('/curso', [CursoController::class, 'index'])->name('curso.index');
    Route::get('/tarea/create', [CursoController::class, 'tareacreate'])->name('tarea.create');
    Route::get('/cursos/{curso}', [CursoController::class, 'show'])->name('curso.show');

    //agregar tareas docente
    // Route::get('/tarea/create', [TareaController::class, 'create'])->name('tarea.create');
    Route::post('/tarea', [TareaController::class, 'store'])->name('tarea.store');
    Route::get('/tarea/{id}/edit', [TareaController::class, 'edit'])->name('tarea.edit');
    Route::put('/tarea/{id}', [TareaController::class, 'update'])->name('tarea.update');
    Route::delete('/tarea/{id}', [TareaController::class, 'destroy'])->name('tarea.destroy');



    //para estudiantes 
    Route::get('/cursoest', [CursoestController::class, 'index'])->name('cursoest.index');
    Route::get('/tareaest', [TareaestController::class, 'index'])->name('tareaest.index');

    //para administrador 
    Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuario.index');




});

require __DIR__.'/auth.php';



//routing para iniciar con google y facebook
Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/google-callback', function () {
    $user = Socialite::driver('google')->user();
    $userExists = User::where('external_id', $user->id)->where('external_auth', 'google')->first();
    if($userExists){
        Auth::login($userExists);
    }else {
        $userNew = User::create([
            'name' => $user->name,
            'email' => $user->email,
            'avatar' => $user->avatar,
            'external_id' => $user->id,
            'external_auth' => 'google',            
        ]);
        Auth::login($userNew);
    }
    // $user->token
    return redirect('/dashboard');
});
 
Route::get('auth/facebook', [SocialController::class, 'redirectFacebook']);
Route::get('auth/facebook/callback', [SocialController::class, 'callbackFacebook']); 
