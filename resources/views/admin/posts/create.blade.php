@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')


@stop

@section('content')

    
        <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>


    <div class="container mt-5 py-3">


        <div class="col-12 col-lg-10 mx-auto bg-white shadow py-2 px-5 rounded">

            <h2 class="text-center mt-3">Crear nueva publicación</h2>

            <form method="POST" action="{{route ('administracion.posts.store')}}" enctype="multipart/form-data" novalidate>
                @csrf

                <div class="form-group">
                    <label for="imagen">Elige una imagén</label>
                    <input type="file" id="imagen" name="imagen" class="form-control @error('imagen') is-invalid @enderror">
                    @error('imagen')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <p class="mt-3">"Tamaño de la imagen 1280 x 853 px"</p>
                </div>

                <div class="form-group my-5 mx-2">
                    <label for="titulo">Título </label>
                    <input type="text" 
                    name="titulo" 
                    class="form-control @error('titulo') is-invalid @enderror" id="titulo"
                        value="">
                    @error('titulo')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <p class="mt-3">"El título debe ser unico, no puede ser igual a otro post"</p>
                </div>


                <div class="form-group">
                    <label for="contenido">Contenido</label>
                    <br>
                    <textarea name="contenido" id="contenido" cols="30" rows="10"></textarea>
                    @error('contenido')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
               

                
                
                {{-- titulo en ingles --}}
                <div class="form-group my-5 mx-2">
                    <label for="titulo_en">Título en ingles</label>
                    <input type="text" 
                    name="titulo_en" 
                    class="form-control @error('titulo_en') is-invalid @enderror" id="titulo_en"
                        value="">
                    @error('titulo_en')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <p class="mt-3">"El título debe ser unico, no puede ser igual a otro post"</p>
                </div>
                

                {{-- contenido en ingles --}}
                <div class="form-group">
                    <label for="contenido_en">Contenido en ingles</label>
                    <br>
                    <textarea name="contenido_en" id="contenido_en" cols="30" rows="10"></textarea>
                    @error('contenido_en')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                {{-- titulo en italiano --}}
                <div class="form-group my-5 mx-2">
                    <label for="titulo_it">Título en italiano</label>
                    <input type="text" 
                    name="titulo_it" 
                    class="form-control @error('titulo_it') is-invalid @enderror" id="titulo_it"
                        value="">
                    @error('titulo_it')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <p class="mt-3">"El título debe ser unico, no puede ser igual a otro post"</p>
                </div>
                

                {{-- contenido en italiano --}}
                <div class="form-group">
                    <label for="contenido_it">Contenido en italiano</label>
                    <br>
                    <textarea name="contenido_it" id="contenido_it" cols="30" rows="10"></textarea>
                    @error('contenido_it')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success shadow rounded" value="Agregar publicación">
                </div>


            </form>
        </div>

    </div>

    <script>
        CKEDITOR.replace( 'contenido' );
    </script>
    <script>
        CKEDITOR.replace( 'contenido_en' );
    </script>
    <script>
        CKEDITOR.replace( 'contenido_it' );
    </script>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop