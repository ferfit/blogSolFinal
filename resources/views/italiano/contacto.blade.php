@extends('layouts.appItaliano')

@section('content')
<section class="banner banner__contacto m-0" 
data-aos="fade-opacity"
data-aos-duration="1500">

    

</section>

@if ( session('formulario') )
 <script>Swal.fire('Il tuo messaggio è stato inviato con successo.')</script>
@endif


<section class="contacto  bg-white">
  <div class="container">
    <div class="row p-3">

      <div class=" col-12 col-md-6
      contacto__cont-titulos d-flex flex-column justify-content-center align-items-center">
        <img src="{{asset('img/logo.png')}}" alt="" class="w-25">
        
        <h2 class="text-center my-3"> “Percorriamo il Cammino insieme!”</h2>
        <h3 class="text-center mb-2">Vuoi realizzare una consulta?</h3> 
        <p class="text-center">
        Puoi inviare il tuo messaggio attraverso del seguente <br> formulario e ti risponderò in breve.
        </p> 
      </div>

      <div class="col-12 col-md-6 
      contacto__cont-formulario rounded shadow-lg">

      <form method="POST" action="{{ route('form') }}" novalidate>
                @csrf

                

                <div class="form-group ">
                    <label for="nombre">Nome </label>
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
                    <label for="mensaje">Messaggio</label>
                    <br>
                    <textarea name="mensaje" id="mensaje" cols="30" rows="10" class="form-control"></textarea>
                    @error('mensaje')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
               

                <div class="form-group">
                    <input type="submit" class="btn btn-white contacto__boton-enviar shadow rounded" value="Spedire">
                </div>


            </form>
      
      </div>
    
    </div>

  </div>

  @include('includes.footerItaliano')

</section>



  
  


@endsection
