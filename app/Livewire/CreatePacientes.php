<?php

namespace App\Livewire;

use App\Http\Controllers\PacientesController;
use App\Models\Paciente;
use Livewire\Component;


class CreatePacientes extends Component
{
    public $titulo="Registrar Pacientes";

    public $id;
    public $nombre="";
    public $direccion="";
    public $fNac;
    public $telefono;
    public $email;

    public $estado=false;

    public function render()
    {
        return view('livewire.pacientes.create-pacientes');
    }

    public function mount($myArray){
        $this->titulo=empty($myArray['titulo'])?"Registrar Pacientes":$myArray['titulo'];

        $this->id=empty($myArray['id'])?"":$myArray['id'];
        $this->nombre=empty($myArray['nombre'])?"":$myArray['nombre'];
        $this->direccion=empty($myArray['direccion'])?"":$myArray['direccion'];
        $this->fNac=empty($myArray['fechaNac'])?"":$myArray['fechaNac'];
        $this->telefono=empty($myArray['telefono'])?"":$myArray['telefono'];
        $this->email=empty($myArray['email'])?"":$myArray['email'];
        $this->estado=empty($myArray['estado'])?"":$myArray['estado'];
    }


    public function save(){

        
        $resultados=auth()->user();

        $servicios=new PacientesController();

        $creado=[
            "nombre"=>$this->nombre,
            "direccion"=>$this->direccion,
            "fechaNac"=>$this->fNac,
            "telefono"=>$this->telefono,
            "email"=>$this->email
        ];

            
        if($servicios->store($creado)){
            return redirect()->route('dashboard');
        }
        
    }
    public function update(){

        $servicios=new PacientesController();
        
        $creado=new Paciente( [
            "nombre"=>$this->nombre,
            "direccion"=>$this->direccion,
            "fechaNac"=>$this->fNac,
            "telefono"=>$this->telefono,
            "email"=>$this->email,
            "estado"=>$this->estado===true?1:0
        ]);
                
        if($servicios->update($this->id,$creado)){
            return redirect()->route('livewire.pacientes');
        }
    }
    public function toggleEstado(bool $est){
        $this->estado=$est;
    }

}
