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
            'appaterno'=>$request['users_appaterno'],
            'apmaterno'=>$request['users_apmaterno'],
            'email' => $request['users_email'],
            'estado'=>$request['users_estado'],
            'password' => Hash::make('password1234'),
            
        ]);

        
        if(!empty($datos)){
            $valor= DB::table('medico')->insert([
                'user_id'=>$datos,
                'especialidad'=>$request['medico_especialidad'],
                'nLicencia'=>$request['medico_nLicencia']                
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
        $pacientes = Medico::all();

        $usuarios = new User();

        $datos = DB::table('users')->leftJoin('medico', 'medico.user_id', "=", "users.id")->whereNotNull('medico.user_id')->select('users.id', 'users.name', 'users.appaterno', 'users.apmaterno', 'users.email', 'users.estado', 'medico.user_id', 'medico.especialidad', 'medico.nLicencia', 'medico.estado')->get();


        return $datos;
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
        
        $datos = DB::table('medico')->where('user_id', $id)->update([
            "user_id"=>$request['medico_user_id'],
            'especialidad'=>$request['medico_especialidad'],
            'nLicencia'=>$request['medico_nLicencia'],
            'estado'=>$request['medico_estado']
        ]);
        

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
