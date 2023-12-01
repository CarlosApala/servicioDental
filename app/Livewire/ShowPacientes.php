<?php

namespace App\Livewire;

use App\Http\Controllers\PacientesController;
use Livewire\Component;

class ShowPacientes extends Component
{
    public $datos;
    public function mount(){
        $paciente=new PacientesController();
        $this->datos=$paciente->show();
        
        return $this->datos;
    }
    public function render()
    {
        return view('livewire.pacientes.show-pacientes');
    }

    public function updatePacientes(string $id){
        
        foreach($this->datos as $element){
            if($element['id']==$id){
                $element['titulo']="Actualizar Paciente";
                $datos[]='createPacientes';
                $datos[]=$element;
                $datos[]="Actualizar Pacientes";
                $this->dispatch('changeMainPaciente',$datos);


            }
        }
        
    }
    public function deletePacientes(string $id, bool $es){
        $servicios=new PacientesController();
        
    $elementoEncontrado = array_filter([...$this->datos], function ($elemento) use ($id) {
        return $elemento['id'] == $id;
    });
        $servicios->delete($id,$es);

        $this->mount();
    }
}
