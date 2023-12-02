
 <div class="container-fluid" >
    <div class="row" >
      <!-- Navbar lateral -->
      <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar m" >
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
              <button class="btn btn-primary my-1" wire:click="showMedicos">Inicio</button>                 
              @can('livewire.medicos.create')
              <button class="btn btn-primary my-1" wire:click="createMedicos">Crear</button>
              @endcan
          </ul>
        </div>
      </nav>
      <!-- Contenido principal -->
      <main class="col-md-9">
        @if ($componentMain==="showMedicos")
          <livewire:medico.show-medicos />
        @elseif ($componentMain==="createMedicos")      
          <livewire:medico.create-medicos :myArray="$updateData"/>
        @endif
        
      </main>
    </div>
  </div>