<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Roles;
use App\Models\Servicios;
use App\Models\User;
use App\Policies\ServiciosPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
        Servicios::class=>ServiciosPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
/* 
        Gate::define('update-services',function (Roles $roles, Servicios $servicios){
            return $roles->nombre==="administrador";
        });
         */
    }
}
