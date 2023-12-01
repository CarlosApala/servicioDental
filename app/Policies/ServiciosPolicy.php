<?php

namespace App\Policies;

use App\Models\Roles;
use App\Models\Servicios;
use App\Models\User;
use App\Models\RolesUsuario;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class ServiciosPolicy
{
    use HandlesAuthorization;
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Servicios $servicios): bool
    {
        //
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
        $rolesUsuario=new RolesUsuario();
        $roles=new Roles(); 

        $rolesUsuario=$rolesUsuario->where('user_id',$user->id)->get();
        


        foreach ($rolesUsuario as $key =>$valor) {
            /* dd($valor->role_id); */
            $respuesta=$roles->where('id',$valor->role_id)->get();

            if($respuesta[$key]->nombre==="medico"){
                return true;
            }
            
        }

        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Servicios $servicios): bool
    {
        //
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Servicios $servicios): bool
    {
        //
        return true;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Servicios $servicios): bool
    {
        //
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Servicios $servicios): bool
    {
        //
        return true;
    }
}
