@extends('layouts.app')

@section('content')
<section class="banner banner__contacto m-0" 
data-aos="fade-opacity"
data-aos-duration="1500">

    

</section>




<section class="contacto  bg-white">
  <div class="container">
    <div class="row p-3">

      <div class=" col-12 col-md-6
      contacto__cont-titulos d-flex flex-column justify-content-center align-items-center">
        <img src="{{asset('img/logo.png')}}" alt="" class="w-25">
        
        <h2 class="text-center my-3">“Recorramos juntos el Camino!”</h2>
        <h3 class="text-center mb-2">¿Quieres hacerme alguna consulta?</h3> 
        <p class="text-center">
          Podes enviar tu mensaje a través del siguiente <br> formulario y lo
          contestaré a la brevedad.
        </p> 
      </div>

      <div class="col-12 col-md-6 
      contacto__cont-formulario rounded shadow-lg">

      <form method="POST" action="" novalidate>
                @csrf

                

                <div class="form-group ">
                    <label for="nombre">Nombre </label>
                    <input type="text" 
                    name="nombre" 
                    class="form-control @error('nombre') is-invalid @enderror" id="nombre"
                        value="">
                    @error('nombre')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group ">
                    <label for="email">Email</label>
                    <input type="email" 
                    name="email" 
                    class="form-control @error('email') is-invalid @enderror" id="email"
                        value="">
                    @error('email')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="mensaje">Mensaje</label>
                    <br>
                    <textarea name="mensaje" id="mensaje" cols="30" rows="10" class="form-control"></textarea>
                    @error('contenido')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
               

                <div class="form-group">
                    <input type="submit" class="btn btn-white contacto__boton-enviar shadow rounded" value="Enviar">
                </div>


            </form>
      
      </div>
    
    </div>

  </div>

  @include('includes.footer')

</section>



  
  


@endsection
