
 

 <div class="container-fluid" >
  <div class="row" >
    <!-- Navbar lateral -->
    <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar m" >
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <button class="btn btn-primary my-1" wire:click="showPacientes">Inicio</button>                 
            <button class="btn btn-primary my-1" wire:click="createPacientes">Crear</button>
            
        </ul>
      </div>
    </nav>
    <!-- Contenido principal -->
    <main class="col-md-9 text-center">
      <h3 class="mb-4"><strong>Pacientes</strong></h3>
      @if ($componentMain==="showPacientes")
      
        <livewire:show-pacientes />
      @elseif ($componentMain==="createPacientes")      
        <livewire:create-pacientes :myArray="$updateData"/>
      @endif
      <!-- Tu contenido principal va aquí -->
    </main>
  </div>
</div>