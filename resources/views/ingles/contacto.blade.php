@extends('layouts.appIngles')

@section('content')
<section class="banner m-0" 
data-aos="fade-opacity"
data-aos-duration="1500">

    
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3105.510217360027!2d1.3705004153501257!3d38.88944627957189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzjCsDUzJzIyLjAiTiAxwrAyMicyMS43IkU!5e0!3m2!1ses!2sar!4v1618238268033!5m2!1ses!2sar" width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

</section>




<section class="contacto  bg-white">
  <div class="container">
    <div class="row p-3">

      <div class=" col-12 col-md-6
      contacto__cont-titulos d-flex flex-column justify-content-center align-items-center">
        <img src="{{asset('img/logo.png')}}" alt="" class="w-25">
        
        <h2 class="text-center my-3">“Let's walk the Camino together!”</h2>
        <h3 class="text-center mb-2">Do you want to ask me any questions?</h3> 
        <p class="text-center">
            You can send your message through the following <br>
            form and I will answer it shortly.
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

  @include('includes.footerIngles')

</section>



  
  


@endsection
