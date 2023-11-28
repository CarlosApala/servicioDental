<?php

namespace App\Http\Middleware;

use App\Http\Controllers\RolesUsuarioController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authorization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        /* dd($request->session()->getId()); */
        $usuarios=new UserController();
        $sesion=new SessionController();

        //id de usuario logeado
        $id=$request->session()->getId();

        //sesion iniciado
        $valor=$sesion->show($id);
        
        $roles=new RolesUsuarioController();

        $roles->show($valor->user_id);

        

        return $next($request);
    }
}
