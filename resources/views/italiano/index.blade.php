@extends('layouts.appItaliano')

@section('metas')
  <meta name="robots" content="index,follow"/> 
@endsection

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
    >Terapista Olistica</h2>

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
                
                <h2 class="terapias__titulo-principal">Terapie</h2>
                <p class="terapias__parrafo-principal">
                  Ogni proposta ci invita a immergerci nel nostro interiore e ci aiuta a scoprire nuovi benefici abiti. Prese di conoscenza, nuove prospettive, accettazione, integrazione e sanazione, sono solo alcune delle infinite opportunità che possono sorgere se ti avventuri in questo
                  Conscente Svegliare. Abbracciando il nostro passato potremo integrare la Magia che ci circonda, e in questa maniera, materializzare i nostri Sogni.
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
                    <a href="{{ route('terapias-italiano') }}" class="text-dark"><span class="terapias__leermas">Leggere altro...</span></a>
                </div>
              @endforeach

              @if( $terapiasTotales->count()>4 )
              <div class="col-12 d-flex justify-content-center">
                <a href="{{ route('terapias-italiano') }}" class=" text-center mt-3 terapias__ver-todas p-2 rounded-pill shadow">Vedere tutte</a>
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
    data-aos-delay="300">“Accompagnami a viaggiare nei miei pensieri, avventure e sogni compiuti”
  </p>

  <div class="container">
    <div class="row d-flex justify-content-center p-3">

      @foreach($posts as $post)
      <div class="blog__cont-post col-12 col-md-3 m-2 p-4 rounded h-auto shadow"
        data-aos="fade-up"
        data-aos-duration="1500"
        data-aos-delay="100">

        <h3 class="blog__titulo">{{ Str::limit (($post->titulo_it),25)}}</h3>
        <p class="blog__parrafo">{!! Str::limit ( html_entity_decode($post->contenido_it),200) !!}</p>
        <a href="{{ route('post-italiano',$post)}} " ><span class="terapias__leermas text-dark">Leggere altro...</span></a>
      </div>
      @endforeach

      

      

      <div class="col-12 d-flex justify-content-center" data-aos="fade-opacity"
      data-aos-duration="1500"
        data-aos-delay="100">
        <a href="{{ route('blog-italiano')}}" class="blog__ver-todos mt-5 text-center rounded-pill shadow">Vedere tutti</a>
      </div>

    </div>

        
  </div>

  

    
    
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
        
        <h2 class="text-center my-3">“Percorriamo il Cammino insieme!”</h2>
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

  

</section>


@include('includes.footerItaliano')
  
  


@endsection
