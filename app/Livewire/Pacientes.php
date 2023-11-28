<?php

namespace App\Livewire;

use App\Http\Controllers\PacientesController;
use Livewire\Component;

class Pacientes extends Component
{

    public $title = 'Post title...';
    public $datos;
    public function mount(){
        $paciente=new PacientesController();
        $this->datos=$paciente->show();
        
        return $this->datos;
    }
    
    public function render()
    {
        return view('livewire.pacientes');
    }

    
}
