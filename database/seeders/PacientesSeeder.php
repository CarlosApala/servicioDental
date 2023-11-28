<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PacientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pacientes')->insert([
            'nombre' => fake()->name,
            'direccion' => fake()->address,
            'telefono' => fake()->phoneNumber,
            'email' => fake()->email,
            'fechaNac' => fake()->date,
            
        ]);
        DB::table('pacientes')->insert([
            'nombre' => fake()->name,
            'direccion' => fake()->address,
            'telefono' => fake()->phoneNumber,
            'email' => fake()->email,
            'fechaNac' => fake()->date,
            
        ]);
        DB::table('pacientes')->insert([
            'nombre' => fake()->name,
            'direccion' => fake()->address,
            'telefono' => fake()->phoneNumber,
            'email' => fake()->email,
            'fechaNac' => fake()->date,
            
        ]);
        DB::table('pacientes')->insert([
            'nombre' => fake()->name,
            'direccion' => fake()->address,
            'telefono' => fake()->phoneNumber,
            'email' => fake()->email,
            'fechaNac' => fake()->date,
            
        ]);
        DB::table('pacientes')->insert([
            'nombre' => fake()->name,
            'direccion' => fake()->address,
            'telefono' => fake()->phoneNumber,
            'email' => fake()->email,
            'fechaNac' => fake()->date,
            
        ]);
        DB::table('pacientes')->insert([
            'nombre' => fake()->name,
            'direccion' => fake()->address,
            'telefono' => fake()->phoneNumber,
            'email' => fake()->email,
            'fechaNac' => fake()->date,
            
        ]);DB::table('pacientes')->insert([
            'nombre' => fake()->name,
            'direccion' => fake()->address,
            'telefono' => fake()->phoneNumber,
            'email' => fake()->email,
            'fechaNac' => fake()->date,
            
        ]);DB::table('pacientes')->insert([
            'nombre' => fake()->name,
            'direccion' => fake()->address,
            'telefono' => fake()->phoneNumber,
            'email' => fake()->email,
            'fechaNac' => fake()->date,
            
        ]);
    }
}
