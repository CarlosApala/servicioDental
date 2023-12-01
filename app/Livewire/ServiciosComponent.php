<?php

namespace App\Livewire;

use App\Http\Controllers\ServiciosController;
use App\Models\Servicios;
use Livewire\Component;
use App\Livewire\Session;
use Livewire\Attributes\On; 


class ServiciosComponent extends Component
{
    public $componentMain="ServicioShow";

    public $updateData;

    #[On('changeMain')]
    public function cambiarMain($datos){
        $this->componentMain=$datos[0];
        
        if($this->componentMain==="createServicios"){
            $this->updateData=$datos[1];
        }
    }

    public function showServicios(){
        return $this->componentMain="showServicios";
    }
    public function createServicios(){
        $this->updateData=[];
        return $this->componentMain="createServicios";
    }
    
    public function mount(){
        $this->componentMain="showServicios";
    }
    public function render()
    {
        return view('livewire.servicios.servicios');
    }
    
}
