@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container my-4">
    <h1 class="tart">Listado de publicaciones</h1>
</div>

<div class="container mt-2 ">
    <a href="{{ route('administracion.posts.create' )}}" class="btn btn-success shadow">Crear publicación</a>
</div>
@stop

@section('content')

    @livewire('post-index')

    @livewireScripts

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @livewireStyles
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop