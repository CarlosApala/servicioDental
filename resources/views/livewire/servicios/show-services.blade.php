<div class="container m-4">
    
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Tarifa</th>
            <th scope="col">Disponible</th>
            @can('livewire.servicios.update')
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
                <td> {{$dt->descripcion}} </td>
                <td> {{$dt->tarifa}}bs </td>
                <td> {{ $dt->estado?"no":"si" }} </td>
                @can('livewire.servicios.update')
                  
                <td> <button class="btn btn-warning" wire:click="updateServices({{$dt->id}})" >Modificar</button> </td>
                @endcan
                @can('livewire.servicios.delete')
                  
                <td> <button @if($dt->estado) class="btn btn-success" @else class="btn btn-danger" @endif  wire:click="deleteServices({{$dt->id}},@if($dt->estado==true)false @else true @endif)">@if($dt->estado) Activar @else Eliminar @endif</button> </td>
                @endcan

              </tr>
            </div>
          @endforeach
        </tbody>
      </table>
  </div>
  
