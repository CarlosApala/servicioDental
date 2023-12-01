<?php

namespace Database\Seeders;

use App\Models\Medico;
use App\Models\RolesUsuario;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MedicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        /* $medico1=RolesUsuario::where('role_id','5')->first()->user_id;
        $medico2=RolesUsuario::where('role_id','5')->first()->user_id;
        $medico3=RolesUsuario::where('role_id','5')->first()->user_id;
        $medico4=RolesUsuario::where('role_id','5')->first()->user_id;
        $medico5=RolesUsuario::where('role_id','5')->first()->user_id;
        
        DB::table('medico')->insert([
            'user_id'=>$medico1,
            'especialidad'=>'odontologo',
            'nLicencia'=>fake()->randomNumber,
        ]);
        DB::table('medico')->insert([
            'user_id'=>$medico2,
            'especialidad'=>'odontologo',
            'nLicencia'=>fake()->randomNumber,
        ]);
        DB::table('medico')->insert([
            'user_id'=>$medico3,
            'especialidad'=>'odontologo',
            'nLicencia'=>fake()->randomNumber,
        ]);
        DB::table('medico')->insert([
            'user_id'=>$medico4,
            'especialidad'=>'odontologo',
            'nLicencia'=>fake()->randomNumber,
        ]);
        DB::table('medico')->insert([
            'user_id'=>$medico5,
            'especialidad'=>'odontologo',
            'nLicencia'=>fake()->randomNumber,
        ]);
        DB::table('medico')->insert([
            'user_id'=>$medico1,
            'especialidad'=>'odontologo',
            'nLicencia'=>fake()->randomNumber,
        ]); */

    }
}
