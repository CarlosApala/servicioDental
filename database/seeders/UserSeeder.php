<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* $medico=\App\Models\Roles::where('nombre','medico')->first()->id;
        $administracion=\App\Models\Roles::where('nombre','administracion')->first()->id;
        $cajero=\App\Models\Roles::where('nombre','cajero')->first()->id; */
        

        DB::table('users')->insert([
            'name' => fake()->name,
            'email' => fake()->email,
            'password' => Hash::make('password'),
            
        ]);
        DB::table('users')->insert([
            'name' => fake()->name,
            'email' => fake()->email,
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => fake()->name,
            'email' => fake()->email,
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => fake()->name,
            'email' => fake()->email,
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => fake()->name,
            'email' => fake()->email,
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => fake()->name,
            'email' => fake()->email,
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => fake()->name,
            'email' => fake()->email,
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => fake()->name,
            'email' => fake()->email,
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => fake()->name,
            'email' => fake()->email,
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => fake()->name,
            'email' => fake()->email,
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => fake()->name,
            'email' => fake()->email,
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => fake()->name,
            'email' => fake()->email,
            'password' => Hash::make('password'),
        ]);

    }
}
