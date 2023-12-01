<?php

namespace App\Livewire;



use Livewire\Component;
use Livewire\Attributes\On; 

class PacientesComponent extends Component
{

    public $title = 'Post title...';
    public $datos;
    public $updateData;

    public $componentMain="showPacientes";
    
    #[On('changeMainPaciente')]
    public function cambiarMain($datos){
        $this->componentMain=$datos[0];
        
        if($this->componentMain==="createPacientes"){
            $this->updateData=$datos[1];
        }
    }
    
    public function render()
    {
        return view('livewire.pacientes.pacientes');
    }

    public function showPacientes(){
        return $this->componentMain="showPacientes";
    }
    public function createPacientes(){
        $this->updateData=[];
        return $this->componentMain="createPacientes";
    }
    
    public function mount(){
        $this->componentMain="showPacientes";
    }
}
