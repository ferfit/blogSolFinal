@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container my-4">
    <h1 class="tart">Listado de terapias ES</h1>
</div>

<div class="container mt-2 ">
    <a href="{{ route('administracion.servicios.create' )}}" class="btn btn-success shadow">Crear terapia ES</a>
</div>
@stop

@section('content')

    @livewire('servicio-index')

    @livewireScripts

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @livewireStyles
@stop

@section('js')
    
@stop