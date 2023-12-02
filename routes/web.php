<?php

use App\Http\Controllers\MedicoController;
use App\Http\Controllers\ServiciosController;
use App\Livewire\Medico\MedicoComponent;
use App\Livewire\PacientesComponent;
use App\Livewire\ServiciosComponent;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $serv=new ServiciosController();
    $datos=$serv->show()->where('estado',false);
    return view('welcome',compact('datos'));
})->name('/');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $user=Auth::user();
        
        return view('dashboard');
    })->name('dashboard');
    Route::get('/servicios',ServiciosComponent::class)->name('livewire.servicios');
    Route::get('/pacientes',PacientesComponent::class)->name('livewire.pacientes');
    Route::get('/medicos',MedicoComponent::class)->name('livewire.medicos');

});



