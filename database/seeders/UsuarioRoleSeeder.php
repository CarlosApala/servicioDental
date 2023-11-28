<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class UsuarioRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $medico=\App\Models\Roles::where('nombre','medico')->first()->id;
        $administracion=\App\Models\Roles::where('nombre','administrador')->first()->id;
        $cajero=\App\Models\Roles::where('nombre','cajero')->first()->id;

        $usuario1=User::where('id','5')->first()->id;
        $usuario2=User::where('id','6')->first()->id;
        $usuario3=User::where('id','7')->first()->id;
        $usuario4=User::where('id','8')->first()->id;
        $usuario16=User::where('id','16')->first()->id;
        $usuario17=User::where('id','17')->first()->id;
        $usuario18=User::where('id','18')->first()->id;
        $usuario19=User::where('id','19')->first()->id;
        $usuario20=User::where('id','20')->first()->id;
        
        DB::table('roles_usuarios')->insert([
            'role_id'=>$medico,
            'user_id'=>$usuario1
        ]);
        DB::table('roles_usuarios')->insert([
            'role_id'=>$medico,
            'user_id'=>$usuario2
        ]);
        DB::table('roles_usuarios')->insert([
            'role_id'=>$medico,
            'user_id'=>$usuario3
        ]);
        DB::table('roles_usuarios')->insert([
            'role_id'=>$medico,
            'user_id'=>$usuario4
        ]);
        DB::table('roles_usuarios')->insert([
            'role_id'=>$administracion,
            'user_id'=>$usuario1
        ]);
        DB::table('roles_usuarios')->insert([
            'role_id'=>$medico,
            'user_id'=>$usuario16
        ]);
        DB::table('roles_usuarios')->insert([
            'role_id'=>$medico,
            'user_id'=>$usuario17
        ]);
        DB::table('roles_usuarios')->insert([
            'role_id'=>$medico,
            'user_id'=>$usuario18
        ]);
        DB::table('roles_usuarios')->insert([
            'role_id'=>$medico,
            'user_id'=>$usuario19
        ]);
        DB::table('roles_usuarios')->insert([
            'role_id'=>$medico,
            'user_id'=>$usuario20
        ]);
        
    }
}