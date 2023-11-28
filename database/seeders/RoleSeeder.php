<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'nombre' => 'administrador',
            'descripcion' => "encargado del sistema"
        ]);
        DB::table('roles')->insert([
            'nombre' => 'medico',
            'descripcion' => "encargado del sistema"
        ]);
        DB::table('roles')->insert([
            'nombre' => 'cajero',
            'descripcion' => "encargado del sistema"
        ]);
    }
}
