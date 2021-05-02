@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container my-4">
    <h1 class="tart">Listado de terapias IT</h1>
</div>

<div class="container mt-2 ">
    <a href="{{ route('administracion.servicios-italiano.create' )}}" class="btn btn-success shadow">Crear terapia IT</a>
</div>
@stop

@section('content')

<div>
    <div class="py-5">
        
        <div class="container ">
              
            <table class="table bg-white mt-2 shadow">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th >Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($serviciosItaliano as $italiano)
                        <tr>
                            <td class="h-auto">{{ Str::limit (($italiano->titulo),60)}}</td>
                            
                            <td class="h-auto">{{ Str::limit (($italiano->descripcion),60)}}</td>

                            <td class="h-auto">
                                <div class="row">
                                    <a href="" class="btn btn-light  mr-2 mb-1 shadow rounded-pill">Ver</a>
                                    <a href="{{ route('administracion.servicios-italiano.edit', $italiano )}}" class="btn btn-primary mr-2 mb-1 shadow rounded-pill">Editar</a>
                                
                                    <form action="{{ route('administracion.servicios-italiano.destroy', $italiano)}}" method="POST" class="" >
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
                {{ $serviciosItaliano->links() }}
            </div>   

        </div>
        
    </div>
</div>
    

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    
@stop

@section('js')
    
@stop