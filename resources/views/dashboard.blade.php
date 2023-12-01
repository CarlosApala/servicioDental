<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mt-4 d-flex flex-wrap">
                    <a href="{{route('livewire.pacientes')}} " class="btn btn-primary container-md m-1" style="width:15rem; height: 10rem; text-align: center;text-align: center; display: flex; align-items: center; justify-content: center;">Pacientes</a>
                    @can('livewire.medicos.index')
                        <a href="{{route('livewire.medicos') }} " class="btn btn-primary container-md m-1" style="width:15rem; height: 10rem; text-align: center;text-align: center; display: flex; align-items: center; justify-content: center;">Medicos</a>
                    @endcan
                    <a href="{{route('livewire.servicios')}} " class="btn btn-primary container-md m-1" style="width:15rem; height: 10rem; text-align: center;text-align: center; display: flex; align-items: center; justify-content: center;">Servicios</a>
                    <a href="" class="btn btn-primary container-md m-1" style="width:15rem; height: 10rem; text-align: center;text-align: center; display: flex; align-items: center; justify-content: center;">Agendar Cita</a>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
