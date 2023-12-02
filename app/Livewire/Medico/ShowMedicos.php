<?php

namespace App\Livewire\Medico;

use App\Http\Controllers\MedicoController;
use App\Http\Controllers\UserController;
use App\Models\Medico;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class ShowMedicos extends Component
{
    public $nombre="";
    public $email;

    public $appaterno="";
    public $apmaterno="";
    public $user_id="";
    public $especialidad;
    public $nLicencia;

    public $medicoEstado;
    public $datos;

    public function render()
    {
        return view('livewire..medico.show-medicos');
    }
    public function mount(){
        $this->datos=Medico::join('users','medico.user_id','=','users.id')->select('users.*','medico.*')->get();
        
    }
    
    public function updateMedicos($id){
        
        $datos=Medico::join('users','medico.user_id','=','users.id')->where('medico.id',$id)->select('users.*','medico.*')->get();
        
        if($datos){
                
                $datos["titulo"]="Actualizar Medicos";
                $datos=['createMedicos',...$datos];

                $this->dispatch('changeMainMedico',$datos);
        }
        
        
    }
    public function deleteMedicos(string $id,bool $valor){

        $servicios=new MedicoController();

        $servicios->delete($id,$valor);

        $this->mount();
    }
}
