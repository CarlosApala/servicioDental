<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {      
        User::create([
            'name' => fake()->name,
            'email' => fake()->email,
            'password' => Hash::make('password'),
        ])->assignRole('Admin');

        User::create([
            'name' => fake()->name,
            'email' => fake()->email,
            'password' => Hash::make('password'),
        ])->assignRole('medico');
        User::create([
            'name' => fake()->name,
            'email' => fake()->email,
            'password' => Hash::make('password'),
        ])->assignRole('medico');
        User::create([
            'name' => fake()->name,
            'email' => fake()->email,
            'password' => Hash::make('password'),
        ])->assignRole('medico');
        User::create([
            'name' => fake()->name,
            'email' => fake()->email,
            'password' => Hash::make('password'),
        ])->assignRole('medico');
        User::create([
            'name' => fake()->name,
            'email' => fake()->email,
            'password' => Hash::make('password'),
        ])->assignRole('medico');
        User::create([
            'name' => fake()->name,
            'email' => fake()->email,
            'password' => Hash::make('password'),
        ])->assignRole('medico');
        User::create([
            'name' => fake()->name,
            'email' => fake()->email,
            'password' => Hash::make('password'),
        ])->assignRole('medico');
        User::create([
            'name' => fake()->name,
            'email' => fake()->email,
            'password' => Hash::make('password'),
        ])->assignRole('medico');
        User::create([
            'name' => fake()->name,
            'email' => fake()->email,
            'password' => Hash::make('password'),
        ])->assignRole('medico');
        User::create([
            'name' => fake()->name,
            'email' => fake()->email,
            'password' => Hash::make('password'),
        ])->assignRole('medico');
        User::create([
            'name' => fake()->name,
            'email' => fake()->email,
            'password' => Hash::make('password'),
        ])->assignRole('cajero');
        User::create([
            'name' => fake()->name,
            'email' => fake()->email,
            'password' => Hash::make('password'),
        ])->assignRole('cajero');


        
        
    }
}
