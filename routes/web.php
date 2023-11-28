<?php

use App\Http\Controllers\ServiciosController;
use App\Livewire\CreatePost;
use App\Livewire\Pacientes;
use App\Models\Servicios;
use Illuminate\Support\Facades\Route;
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

    $servicios=new Servicios();

    $datos=$serv->show($servicios);
    
    return view('welcome',compact('datos'));
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard')->middleware('authorization');
    Route::get('/pacientes',Pacientes::class)->name('livewire.pacientes')->middleware('authorization');  
});



