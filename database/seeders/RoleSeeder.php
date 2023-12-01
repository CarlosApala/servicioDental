<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $Administrador = Role::create(['name' => 'Admin']);
        $medico= Role::create(['name'=>'medico']);
        $cajero= Role::create(['name'=>'cajero']);

        Permission::create(['name' => 'dashboard'])->syncRoles([$Administrador,$medico,$cajero]);      
        Permission::create(['name' => 'livewire.servicios.index'])->syncRoles([$Administrador,$medico,$cajero]);
        Permission::create(['name' => 'livewire.servicios.create'])->syncRoles([$Administrador]);
        Permission::create(['name' => 'livewire.servicios.update'])->syncRoles([$Administrador]);
        Permission::create(['name' => 'livewire.servicios.delete'])->syncRoles([$Administrador]);
        Permission::create(['name' => 'livewire.pacientes.index'])->syncRoles([$Administrador,$medico,$cajero]);
        Permission::create(['name' => 'livewire.pacientes.create'])->syncRoles([$Administrador]);
        Permission::create(['name' => 'livewire.pacientes.update'])->syncRoles([$Administrador]);
        Permission::create(['name' => 'livewire.pacientes.delete'])->syncRoles([$Administrador]);
        Permission::create(['name' => 'livewire.medicos.index'])->syncRoles([$Administrador,$medico]);
        Permission::create(['name' => 'livewire.medicos.create'])->syncRoles([$Administrador]);
        Permission::create(['name' => 'livewire.medicos.update'])->syncRoles([$Administrador]);
        Permission::create(['name' => 'livewire.medicos.delete'])->syncRoles([$Administrador]);
    }
}

