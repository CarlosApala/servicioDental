<?php

namespace App\Livewire;

use App\Http\Controllers\ServiciosController;
use App\Models\Servicios;
use Livewire\Component;
use Livewire\Attributes\On; 

class CreateServices extends Component
{
    public $titulo="";
    public $id;
    public $nombre="";
    public $descripcion="";
    public $tarifa=0.0;
    public $estado=false;

    public $updateData;

    public function render()
    {
        return view('livewire.servicios.create-services');
    }
    public function mount($myArray){

        $this->titulo=empty($myArray['titulo'])?"Crear Servicio":$myArray['titulo'];
        
        $this->id=empty($myArray['id'])?"":$myArray['id'];
        $this->nombre=empty($myArray['nombre'])?"":$myArray['nombre'];
        $this->descripcion=empty($myArray['descripcion'])?"":$myArray['descripcion'];
        $this->tarifa=empty($myArray['tarifa'])?"":$myArray['tarifa'];
        $this->estado=empty($myArray['estado'])?false:true;
    }
    public function save(){

        $resultados=auth()->user();

        $servicios=new ServiciosController();
        
        
        $creado=new Servicios( [
            "nombre"=>$this->nombre,
            "descripcion"=>$this->descripcion,
            "tarifa"=>$this->tarifa,
            "estado"=>$this->estado==true?1:0
        ]);
                
        if($servicios->store($creado)){
            return redirect()->route('dashboard');
        }
        
    }
    public function update(){

        $resultados=auth()->user();

        $servicios=new ServiciosController();
        
        
        
        $creado=new Servicios( [
            "nombre"=>$this->nombre,
            "descripcion"=>$this->descripcion,
            "tarifa"=>$this->tarifa,
            "estado"=>$this->estado==true?1:0
        ]);
                
        if($servicios->update($this->id,$creado)){
            return redirect()->route('livewire.servicios');
        }
        
    }
    public function irInicio(){
        $element=[];
        $datos[]="showServicios";
        $datos[]=$element;
        $this->dispatch('changeMain',$datos);
    }
    
    public function toggleEstado(bool $est){
        $this->estado=$est;
    }
}
