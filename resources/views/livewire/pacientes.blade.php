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
            </tr>
          </div>
        @endforeach
        {{-- <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
        </tr> --}}
      </tbody>
    </table>
</div>
