<?php

namespace App\Http\Controllers;

use App\Models\Servicios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Servicios $servicios)
    {
        //
        
        $user=Auth::user();
        
        if(!$this->authorize('create',$servicios)){
            dd("pas ");
            return false;
        }

        $servicios->save();

        return true;
            
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $datos=[];
        if(auth()->check()){
            $datos= Servicios::when(auth()->user()->hasRole('Admin'),function($query){
            
            })->when(auth()->user()->hasRole('medico'),function($query){
                $query->where('estado',false);
            })->get();
        }else{
            
            $datos=Servicios::where('estado',false)->get();
        }

        return $datos;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Servicios $servicios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id,Servicios $service)
    {
            
        Servicios::where('id',$id)->update([
            "nombre"=>$service->nombre,
            "descripcion"=>$service->descripcion,
            "tarifa"=>$service->tarifa,
            "estado"=>$service->estado

        ]);
                
        return true;   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id,bool $estado){

        
          Servicios::where('id',$id)->update(['estado'=>$estado]);
        
        return true;
    }
    
    public function destroy(Servicios $servicios)
    {
        //
    }
}
