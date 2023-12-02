<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MedicoController extends Controller
{
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($request)
    {

        $datos = DB::table('users')->insertGetId([
            'name' => $request['users_name'],
            'appaterno' => $request['users_appaterno'],
            'apmaterno' => $request['users_apmaterno'],
            'email' => $request['users_email'],
            'estado' => $request['users_estado'],
            'password' => Hash::make('password1234'),

        ]);

        if (!empty($datos)) {
            $valor = DB::table('medico')->insert([
                'user_id' => $datos,
                'especialidad' => $request['medico_especialidad'],
                'nLicencia' => $request['medico_nLicencia']
            ]);
        }

        return $valor;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $datos = [];
        if (auth()->check()) {
            $datos = Medico::when(auth()->user()->hasRole('Admin'), function ($query) {
            })->when(auth()->user()->hasRole('medico'), function ($query) {
                $query->where('estado', false);
            })->when(auth()->user()->hasRole('cajero'), function ($query) {
                $query->where('estado', false);
            })->get();
        } else {

            $datos = Medico::where('estado', false)->get();
        }
        return $datos;
    }

    public function showMedicos(){
        $datos=[];

        /* $datos = User::join('medico', 'users.id', '=', 'medico.user_id')
        ->select('users.*', 'medico.*');

        dd($datos); */
        $medicos = DB::table('medico')
    ->join('users', 'medico.user_id', '=', 'users.id')
    ->select('medico.especialidad', 'users.name', 'users.email')->where('users.estado',false)
    ->get();
    /* dd($medicos); */
        
        return $medicos;

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
    public function update($id, $request)
    {
        /* dd($request); */

        DB::table('users')
            ->where('id', $request['medico_user_id'])
            ->update([
                'name' => $request['users_name'],
                'appaterno' => $request['users_appaterno'],
                'apmaterno' => $request['users_apmaterno'],
                // Puedes optar por no actualizar la contraseña aquí
            ]);



        // Buscar el registro en la tabla 'medico' asociado a este usuario
        /* $medicoExistente = DB::table('medico')->where('id', $request['users_id'])->first(); */
        $medicoExistente=Medico::where('id',$request['users_id'])->first();
        
        
        if ($medicoExistente) {
            // Actualizar los datos de la tabla 'medico'
            
            $datos = Medico::where('id',$medicoExistente->id)->update([
                "especialidad"=>$request['medico_especialidad'],
                "nLicencia"=>$request['medico_nLicencia'],
                "estado"=>$request['medico_estado']
            ]);
        } else {
            // Si no existe un registro en 'medico', puedes insertarlo aquí si es necesario
        }
        
        
        return $datos;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function delete(string $id, bool $valor)
    {
        $medico = new Medico();

        $datos = DB::table('medico')->where('user_id', $id)->update([
            'estado' => $valor
        ]);
        return true;
    }
}
