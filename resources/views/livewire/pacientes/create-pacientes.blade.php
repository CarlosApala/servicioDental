<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4 class="mb-0">{{$titulo}} </h4>
          </div>
          <div class="card-body">
            <form  @if($titulo==="Registrar Pacientes") wire:submit='save' @else wire:submit='update' @endif method="POST">
              <div class="form-group"> 
                <label for="nombre">Nombre:</label>
                <input wire:model='nombre'  type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre">
              </div>
              <div class="form-group">
                <label for="descripcion">Direccion:</label>
                <textarea wire:model='direccion' class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Ingrese la direccion"></textarea>
              </div>
              <div class="form-group">
                <label for="precio">Fecha Nacimiento:</label>
                <input wire:model='fNac'  type="date" class="form-control" id="precio" name="precio" placeholder="dd/mm/aaaa">
              </div>
              <div class="form-group">
                <label for="precio">Telefono:</label>
                <input wire:model='telefono'  type="number" class="form-control" id="precio" name="precio" placeholder="7XXXXXXX">
              </div>
              <div class="form-group">
                <label for="precio">Email:</label>
                <input wire:model='email'  type="email" class="form-control" id="precio" name="precio" placeholder="usuario@email.com">
              </div>
              <div class="btn-group-horizontal form-group my-2" role="group" aria-label="Vertical radio toggle button group">
                <label for="estado">Estado:</label>
                <input  type="radio" class="btn-check" value="true" name="vbtn-radio" id="vbtn-radio1" autocomplete="off" wire:click='toggleEstado(false)' @if(!$estado) checked @endif>
                <label class="btn btn-outline-success" for="vbtn-radio1">Disponible</label>
                <input type="radio" class="btn-check" value="false" name="vbtn-radio" id="vbtn-radio2" autocomplete="off" wire:click='toggleEstado(true)' @if($estado) checked @endif >
                <label class="btn btn-outline-danger" for="vbtn-radio2">No Disponible</label>
                
              </div>
              <button type="submit" class="btn btn-success">Guardar</button>
            <button type="button" class="btn btn-danger">Salir</button>  
              
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
      


 