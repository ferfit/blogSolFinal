<div>
    <div class="py-5">
        
        <div class="container ">

            

                <input wire:model="search" type="text" placeholder="Buscar..."  class="form-control w-25"/>

               
            
            

            <table class="table bg-white mt-2 shadow">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th >Contenido</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($this->results as $post)
                        <tr>
                            <td class="h-auto">{{Str::limit( ($post->titulo),50 ) }}</td>
                            
                            
                            <td class="h-auto">{!! Str::limit ( html_entity_decode($post->contenido),50) !!}</td>

                            <td class="h-auto">
                                <div class="row">
                                    <a href="{{ route('post',$post)}}" target="_black" class="btn btn-light  mr-2 mb-1 shadow rounded-pill">Ver</a>
                                    <a href="{{ route('administracion.posts.edit', ['post'=> $post->id ])}}" class="btn btn-primary mr-2 mb-1 shadow rounded-pill">Editar</a>
                                
                                    <form action="{{ route('administracion.posts.destroy', $post)}}" method="POST" class="" >
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
