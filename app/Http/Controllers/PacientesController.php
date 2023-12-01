<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacientesController extends Controller
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
    public function store($request)
    {
        $pacientes=new Paciente();
        $pacientes->nombre=$request['nombre'];
        $pacientes->direccion=$request['direccion'];
        $pacientes->fechaNac=$request['fechaNac'];
        $pacientes->telefono=$request['telefono'];
        $pacientes->email=$request['email'];


        $pacientes->save();

        return true;

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $pacientes=Paciente::all();
        return $pacientes;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id,Paciente $paciente)
    {   
        

        Paciente::where('id',$id)->update([
            'nombre'=>$paciente->nombre,
            'direccion'=>$paciente->direccion,
            'fechaNac'=>$paciente->fechaNac,
            'telefono'=>$paciente->telefono,
            'email'=>$paciente->email,
            'estado'=>$paciente->estado
        ]);


        return true;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id,bool $valor){
        Paciente::where('id',$id)->update(['estado'=>$valor]);


    }
    public function destroy(string $id)
    {
        //
    }
}
