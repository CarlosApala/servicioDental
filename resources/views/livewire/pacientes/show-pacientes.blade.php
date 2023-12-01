<div class="container m-4">
  <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Nombre</th>
          <th scope="col">Direccion</th>
          <th scope="col">Fecha Nacimiento</th>
          <th scope="col">Telefono</th>
          <th scope="col">Email</th>
          <th scope="col">Estado</th>
          @can('livewire.pacientes.update')
          <th scope="col">Modificar</th>
            
          @endcan
        </tr>
      </thead>
      <tbody>
        @foreach ($datos as $dt)
          <div wire:key="{{$dt->id}}">
            <tr>
              <th scope="row"> {{$dt->id}} </th>
              <td> {{$dt->nombre}} </td>
              <td> {{$dt->direccion}} </td>
              <td> {{$dt->fechaNac}} </td>
              <td> {{$dt->telefono}} </td>
              <td> {{$dt->email}} </td>
              <td> {{ $dt->estado?"no":"si" }} </td>
              @can('livewire.pacientes.update')
              
              <td> <button class="btn btn-warning" wire:click="updatePacientes({{$dt->id}})" >Modificar</button> </td>
              @endcan
              @can('livewire.pacientes.delete')
                
              <td> <button @if($dt->estado) class="btn btn-success" @else class="btn btn-danger" @endif  wire:click="deletePacientes({{$dt->id}},@if($dt->estado==true)false @else true @endif)">@if($dt->estado) Activar @else Eliminar @endif</button> </td>
              @endcan

            </tr>
          </div>
        @endforeach
        
      </tbody>
    </table>
</div>
