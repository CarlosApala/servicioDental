<?php

namespace App\Livewire;

use App\Http\Controllers\ServiciosController;
use App\Models\Servicios;
use Livewire\Component;
use Livewire\Livewire;

class ShowServices extends Component
{
    public $datos;
    

    public function mount(){

        $serviciosController=new ServiciosController();    
        
        $this->datos=$serviciosController->show();

        
    }
    public function updateServices(string $id){
        $datos=[];
        
        foreach($this->datos as $element){
            if($element['id']==$id){
                $element['titulo']="Actualizar Servicios";
                $datos[]='createServicios';
                $datos[]=$element;
                $datos[]="Actualizar Servicio";
                $this->dispatch('changeMain',$datos);
                /* $this->dispatch('post-created','hola mundo'); */

            }
        }
        
    }
    public function deleteServices(string $id, bool $es){
        $servicios=new ServiciosController();
        
        
    $elementoEncontrado = array_filter([...$this->datos], function ($elemento) use ($id) {
        return $elemento['id'] == $id;
    });
        $servicios->delete($id,$es);

        $this->mount();
    }

    public function render()
    {
        return view('livewire.servicios.show-services');
    }
}
