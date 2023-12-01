

 <div class="container-fluid" >
  <div class="row" >
    <!-- Navbar lateral -->
    <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar m" >
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <button class="btn btn-primary my-1" wire:click="showServicios">Inicio</button>                 
            <button class="btn btn-primary my-1" wire:click="createServicios">Crear</button>
            
        </ul>
      </div>
    </nav>
    <!-- Contenido principal -->
    <main class="col-md-9">
      @if ($componentMain==="showServicios")
        <livewire:show-services />
      @elseif ($componentMain==="createServicios")      
        <livewire:create-services :myArray="$updateData"/>
      @endif
      <!-- Tu contenido principal va aquí -->
    </main>
  </div>
</div>