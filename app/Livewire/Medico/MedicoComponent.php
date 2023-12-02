<?php

namespace App\Livewire\Medico;

use Livewire\Component;
use Livewire\Attributes\On; 
class MedicoComponent extends Component
{

    public $titulo="Registrar Medico";
    public $updateData;
    public function render()
    {
        return view('livewire.medico.medico-component');
    }
    
    public $componentMain="showMedicos";
    
    #[On('changeMainMedico')]
    public function cambiarMain($datos){
        $this->componentMain=$datos[0];

        
        if($this->componentMain==="createMedicos"){

            
            $this->updateData=[...$datos[1],...['titulo'=>$datos['titulo']]];
            /* dd($this->updateData); */
        }
    }

    public function showMedicos(){
        return $this->componentMain="showMedicos";
    }
    public function createMedicos(){
        $this->updateData=[];
        return $this->componentMain="createMedicos";
    }
    
    public function mount(){
        $this->componentMain="showMedicos";
    }
}
