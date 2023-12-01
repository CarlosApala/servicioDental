
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4 class="mb-0">{{$titulo}} </h4>
          </div>
          <div class="card-body">
            <form @if($titulo==="Crear Servicio") wire:submit='save' @else wire:submit='update' @endif method="POST">
               @csrf
              <div class="form-group"> 
                <label for="nombre">Nombre:</label>
                <input wire:model='nombre'  type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre">
              </div>
              <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea wire:model='descripcion'  class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Ingrese una descripción"></textarea>
              </div>
              <div class="form-group">
                <label for="precio">Precio:</label>
                <input wire:model='tarifa' type="number" class="form-control" id="precio" name="precio" placeholder="Ingrese el precio">
              </div>
              <div class="btn-group-horizontal form-group my-2" role="group" aria-label="Vertical radio toggle button group">
                <label for="estado">Estado:</label>
                <input  type="radio" class="btn-check" value="true" name="vbtn-radio" id="vbtn-radio1" autocomplete="off" wire:click='toggleEstado(false)' @if(!$estado) checked @endif>
                <label class="btn btn-outline-success" for="vbtn-radio1">Disponible</label>
                <input type="radio" class="btn-check" value="false" name="vbtn-radio" id="vbtn-radio2" autocomplete="off" wire:click='toggleEstado(true)' @if($estado) checked @endif >
                <label class="btn btn-outline-danger" for="vbtn-radio2">No Disponible</label>
                
              </div>
              <button type="submit" class="btn btn-success">Guardar</button>
              <button type="button" wire:click="irInicio" class="btn btn-danger">Salir</button>  
              
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
      
