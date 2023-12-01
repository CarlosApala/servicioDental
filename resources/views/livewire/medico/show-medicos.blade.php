<div class="container m-4">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido Paterno</th>
            <th scope="col">Apellido Materno</th>
            <th scope="col">Email</th>
            <th scope="col">Especialidad</th>
            <th scope="col">N° Licencia</th>
            <th scope="col">Disponible</th>

            @can('livewire.medicos.update')
            <th scope="col">Modificar</th>
            @endcan
            @can('livewire.medicos.delete')
            <th scope="col">Eliminar</th>
            @endcan
          </tr>
        </thead>
        <tbody>
          @foreach ($datos as $dt)
            <div wire:key="{{$dt->id}}">
              <tr>
                <th scope="row"> {{$dt->id}} </th>
                <td> {{$dt->name}} </td>
                <td> {{$dt->appaterno}} </td>
                <td> {{$dt->apmaterno}} </td>
                <td> {{$dt->email}} </td>
                <td> {{$dt->especialidad}} </td>
                <td> {{$dt->nLicencia}} </td>
                <td> {{ $dt->estado?"no":"si" }} </td>
                @can('livewire.medicos.update')
                  
                <td> <button class="btn btn-warning" wire:click="updateMedicos({{$dt->id}})" >Modificar</button> </td>
                @endcan
                @can('livewire.medicos.delete')
                  
                <td> <button @if($dt->estado) class="btn btn-success" @else class="btn btn-danger" @endif  wire:click="deleteMedicos({{$dt->id}},@if($dt->estado==true)false @else true @endif)">@if($dt->estado) Activar @else Eliminar @endif</button> </td>
                @endcan
              </tr>
            </div>
          @endforeach
          
        </tbody>
      </table>
  </div>
  