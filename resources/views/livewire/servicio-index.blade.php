<div>
    <div class="py-5">
        
        <div class="container ">
            

                <input wire:model="search" type="text" placeholder="Buscar..."  class="form-control w-25"/>
  
            <table class="table bg-white mt-2 shadow">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th >Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($this->results as $servicio)
                        <tr>
                            <td class="h-auto">{{ Str::limit (($servicio->titulo),60)}}</td>
                            
                            <td class="h-auto">{{ Str::limit (($servicio->descripcion),60)}}</td>

                            <td class="h-auto">
                                <div class="row">
                                    <a href="" class="btn btn-light  mr-2 mb-1 shadow rounded-pill">Ver</a>
                                    <a href="{{ route('administracion.servicios.edit', ['servicio'=> $servicio ])}}" class="btn btn-primary mr-2 mb-1 shadow rounded-pill">Editar</a>
                                
                                    <form action="{{ route('administracion.servicios.destroy', $servicio)}}" method="POST" class="" >
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger d-inline mr-1 shadow rounded-pill"
                                            value="Eliminar">
                                    </form>
                                </div>
                            </td>
                        </tr> 
                    @endforeach
                   
                </tbody>
            </table>
         
            <div class="mx-auto">
                {{ $this->results->links() }}
            </div>   

        </div>
        
    </div>
</div>
