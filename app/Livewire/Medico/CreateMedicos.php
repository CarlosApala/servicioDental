<?php

namespace App\Livewire\Medico;

use App\Http\Controllers\MedicoController;
use Livewire\Component;

class CreateMedicos extends Component
{
    public $titulo="Registrar Medico";

    public $id;
    public $name;
    public $appaterno;
    public $apmaterno;
    public $email;
    public $especialidad;
    public $nLicencia;
    public $estado;
    public $user_id;
    public function mount($myArray){
        

        $this->titulo=empty($myArray['titulo'])?"Registrar Medico":$myArray['titulo'];
        $this->id=empty($myArray['id'])?"":$myArray['id'];
        $this->name=empty($myArray['name'])?"":$myArray['name'];
        $this->appaterno=empty($myArray['appaterno'])?"":$myArray['appaterno'];
        $this->apmaterno=empty($myArray['apmaterno'])?"":$myArray['apmaterno'];
        $this->email=empty($myArray['email'])?"":$myArray['email'];
        $this->estado=empty($myArray['estado'])?false:$myArray['estado'];
        $this->user_id=empty($myArray['user_id'])?"":$myArray['user_id'];
        $this->especialidad=empty($myArray['especialidad'])?"":$myArray['especialidad'];
        $this->nLicencia=empty($myArray["nLicencia"])?"":$myArray['nLicencia'];
                
    }
    public function render()
    {
        return view('livewire.medico.create-medicos');
    }
    public function save(){

        $resultados=auth()->user();

        $servicios=new MedicoController();

        $creado=([
            "users_id"=>$this->id,
            "users_name"=>$this->name,
            "users_appaterno"=>$this->appaterno,
            "users_apmaterno"=>$this->apmaterno,
            "users_email"=>$this->email,
            "users_estado"=>$this->estado,
            "medico_user_id"=>$this->id,
            "medico_especialidad"=>$this->especialidad,
            "medico_nLicencia"=>$this->nLicencia
        ]);
                
        if($servicios->create($creado)){
            return redirect()->route('dashboard');
        }
        
    }
    public function update(){
        $resultados=auth()->user();

        $servicios=new MedicoController();
        
        
        $creado=[
            "users_id"=>$this->id,
            "users_name"=>$this->name,
            "users_appaterno"=>$this->appaterno,
            "users_apmaterno"=>$this->apmaterno,
            "users_email"=>$this->email,
            "medico_user_id"=>$this->user_id,
            "medico_especialidad"=>$this->especialidad,
            "medico_nLicencia"=>$this->nLicencia,
            "medico_estado"=>$this->estado,
        ];
                
        if($servicios->update($this->id,$creado)){
            return redirect()->route('livewire.medicos');
        }
    }

    public function toggleEstado($valor){
        $this->estado=$valor;
    }
}
