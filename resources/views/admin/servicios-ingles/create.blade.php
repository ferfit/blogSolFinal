@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')


@stop

@section('content')

    
        {{-- <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script> --}}


    <div class="container mt-5 py-3">


        <div class="col-12 col-lg-10 mx-auto bg-white shadow py-2 px-5 rounded">

            <h2 class="text-center mt-3">Crear nueva terapia EU</h2>

            <form method="POST" action="{{route ('administracion.servicios-ingles.store')}}" enctype="multipart/form-data" novalidate>
                @csrf

                <div class="form-group">
                    <label for="imagen">Elige una imagén</label>
                    <input type="file" id="imagen" name="imagen" class="form-control @error('imagen') is-invalid @enderror">
                    @error('imagen')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <p class="mt-3">"Tamaño de la imagen 500 x 330 px"</p>
                </div>

                <div class="form-group my-5 mx-2">
                    <label for="titulo">Título </label>
                    <input type="text" 
                    name="titulo" 
                    class="form-control @error('titulo') is-invalid @enderror" id="titulo"
                        value="{{ old('titulo') }}">
                    @error('titulo')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group my-5 mx-2">
                    <label for="subtitulo">Sub título </label>
                    <input type="text" 
                    name="subtitulo" 
                    class="form-control @error('subtitulo') is-invalid @enderror" id="subtitulo"
                        value="{{ old('subtitulo') }}">
                    @error('subtitulo')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <br>
                    <textarea class="form-control w-100" name="descripcion" id="descripcion" cols="30" rows="10">
                    {{ old('descripcion') }}
                    </textarea>
                    @error('descripcion')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group my-5 mx-2">
                    <label for="precioEuro">Precio euro </label>
                    <input type="number" 
                    name="precioEuro" 
                    class="form-control @error('precioEuro') is-invalid @enderror" id="precioEuro"
                        value="{{ old('precioEuro') }}">
                    @error('precioEuro')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

               

                {{-- estado --}}
                <div class="form-group">
                    <label for="estado">Estado</label>
                    <br>
                    <select name="estado" id="estado" class="form-control w-25 @error('estado') is-invalid @enderror">
                        <option value="1">ACTIVO</option>
                        <option value="0">DESACTIVADO</option>
                    </select>
                    
                    @error('estado')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success shadow rounded" value="Agregar terapia">
                </div>


            </form>
        </div>

    </div>

    <script>
        /* CKEDITOR.replace( 'descripcion' ); */
    </script>
    <script>
        /* CKEDITOR.replace( 'descripcion_en' ); */
    </script>
    <script>
        /* CKEDITOR.replace( 'descripcion_it' ); */
    </script>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    
@stop