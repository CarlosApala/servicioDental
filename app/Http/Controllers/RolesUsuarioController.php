<?php

namespace App\Http\Controllers;

use App\Models\RolesUsuario;
use Illuminate\Http\Request;

class RolesUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string  $id)
    {
        $roles=new RolesUsuario();

        $getdata=$roles->where('id',$id)->first();

        
        dd($getdata);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RolesUsuario $rolesUsuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RolesUsuario $rolesUsuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RolesUsuario $rolesUsuario)
    {
        //
    }
}