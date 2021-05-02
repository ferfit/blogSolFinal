@extends('layouts.app')

@section('content')
<section class="banner m-0" 
data-aos="fade-opacity"
data-aos-duration="1500">

    <div class="container-fluid p-0 m-0 banner__cont-principal">

    <h1 class="banner__titulo"
    data-aos="fade-up"
    data-aos-offset="200"
    data-aos-delay="100"
    data-aos-duration="2000"
    >Solange <br> Margot</h1>

    <h2 class="banner__subtitulo"
    data-aos="fade-up"
    data-aos-offset="0"
    data-aos-delay="800"
    data-aos-duration="2000"
    >Terapeuta Holística</h2>

    <img 
    data-aos="fade-opacity"
    data-aos-duration="3000"
    src="{{asset('img/logo.png')}}" class="banner__logo" alt="">
    
    </div>

</section>


<section class="terapias ">
  <div class="container">

        <div class="row p-0">
            <div class="terapias__cont-titulos col-12 col-md-4"
            data-aos="fade-opacity"
            data-aos-duration="1000"
            >
                
                <h2 class="terapias__titulo-principal">Terapias</h2>
                <p class="terapias__parrafo-principal">
                    Cada propuesta nos invita a bucear en nuestro interior y nos ayuda a
                    descubrir nuevos y beneficiosos hábitos. Tomas de conciencia, nuevas
                    perspectivas, aceptación, integración y sanación, son unas de las infinitas
                    oportunidades que pueden surgir si te aventuras en este Despertar Consciente.
                    Abrazando nuestro pasado podremos integrar la Magia que nos rodea y, de
                    esta manera, materializar nuestros Sueños.
                </p>
            </div>
            <div class="terapias__cont-terapias row mx-auto col-12 col-md-8">


                @foreach($terapiasEspañol as $terapia)
                <div class="terapias__cont-terapia col-12 col-md-5 col-lg-5 p-5 p-md-23 p-lg-5 mb-4  mx-sm-1 mx-lg-4 rounded shadow"
                data-aos="fade-up"
                data-aos-duration="1500"
                data-aos-delay="500"
                >
                    <h2 class="terapias__titulo">{{ $terapia->titulo}}</h2>
                    <h3 class="terapias__subtitulo">{{ $terapia->subtitulo}}</h3>
                    <p class="terapias__descripcion mt-3">
                    {{ Str::limit (($terapia->descripcion),300)}}
                    </p>
                    <a href="{{ route('terapias') }}" class="text-dark"><span class="terapias__leermas">Leer más...</span></a>
                </div>
              @endforeach

              @if( $terapiasTotales->count()>4 )
              <div class="col-12 d-flex justify-content-center">
                <a href="{{ route('terapias') }}" class=" text-center mt-3 terapias__ver-todas p-2 rounded-pill shadow">Ver todas</a>
              </div>
              @endif

            </div>
        </div>

        
  </div>
</section>


<!-- testimonios -->
@include('includes.carrousel')

<!-- testimonios end -->

<section class="blog">

  <h2 class="blog__titulo-principal text-center mb-3 mr-5"
    data-aos="fade-down"
    data-aos-duration="1500"
    data-aos-delay="100">Blog
  </h2>

  <p class="blog__parrafo-principal text-center mb-5"
    data-aos="fade-opacity"
    data-aos-duration="1500"
    data-aos-delay="300">&quot;Acompáñame a viajar en mis pensamientos, aventuras y sueños
    cumplidos&quot;
  </p>

  <div class="container">
    <div class="row d-flex justify-content-center p-3">

      @foreach($posts as $post)
      <div class="blog__cont-post col-12 col-md-3 m-2 p-4 rounded h-auto shadow"
        data-aos="fade-up"
        data-aos-duration="1500"
        data-aos-delay="100">

        <h3 class="blog__titulo">{{ Str::limit (($post->titulo),25)}}</h3>
        <p class="blog__parrafo">{!! Str::limit ( html_entity_decode($post->contenido),200) !!}</p>
        <a href="{{ route('post',$post)}} " ><span class="terapias__leermas text-dark">Leer más...</span></a>
      </div>
      @endforeach

      

      

      <div class="col-12 d-flex justify-content-center" data-aos="fade-opacity"
      data-aos-duration="1500"
        data-aos-delay="100">
        <a href="" class="blog__ver-todos mt-5 text-center rounded-pill shadow">Ver todos</a>
      </div>

    </div>

        
  </div>

  

    
    
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
