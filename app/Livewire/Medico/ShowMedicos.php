<?php

namespace App\Livewire\Medico;

use App\Http\Controllers\MedicoController;
use App\Models\Medico;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class ShowMedicos extends Component
{
    public function render()
    {
        return view('livewire..medico.show-medicos');
    }
    public $datos;
    public function mount(){

        
        $paciente=new MedicoController();
        $this->datos=$paciente->show();
        return $this->datos;
    }
    
    public function updateMedicos($id){
        
        $datos=[];
        
        
        foreach($this->datos as $element){
            if($element->id===$id){
                
                $element->titulo="Actualizar Medicos";
                $datos[]='createMedicos';
                $datos[]=$element;
                $datos[]="Actualizar Servicio";
                $this->dispatch('changeMainMedico',$datos);
        
            }
        }
        
    }
    public function deleteMedicos(string $id,bool $valor){

        $servicios=new MedicoController();

        $servicios->delete($id,$valor);

        $this->mount();
    }
}
