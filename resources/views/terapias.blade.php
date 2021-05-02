@extends('layouts.app')

@section('content')
<section class="banner m-0" 
data-aos="fade-opacity"
data-aos-duration="1500">

    <div class="container-fluid p-0 m-0 banner__cont-principal banner__cont-principal--terapias">

    <h1 class="banner__titulo"
    data-aos="fade-up"
    data-aos-offset="200"
    data-aos-delay="100"
    data-aos-duration="2000"
    >Terapias</h1>
    
    </div>

</section>


<section class="terapias terapias--terapias">
  <div class="container">

        

        

        

            @foreach($terapiasEspañol as $terapia)
                <div class="terapias__cont-terapia  row rounded p-3 shadow mt-3"
                data-aos="fade-up"
                data-aos-duration="1500"
                data-aos-delay="500"
                >
                    <div class="col-12 col-md-4 terapias__cont-imagen overflow-hidden rounded shadow p-0">
                        <img src="/storage/{{$terapia->imagen}}" alt="" class="h-100" >
                    </div>
                    

                    <div class="col-12 col-md-8 p-3 ">
                        <h2 class="terapias__titulo mt-4">{{ $terapia->titulo}}</h2>
                        <h3 class="terapias__subtitulo">{{ $terapia->subtitulo}}</h3>
                        <p class="terapias__descripcion mt-3">
                        {{ $terapia->descripcion}}
                        </p>
                        <span class="terapias__leermas">EU {{ $terapia->precioEuro}}</span><br><br>
                        <span class="terapias__leermas">ARS {{ $terapia->precioPeso}}</span>
                    </div>
                    
                </div>
            @endforeach

            
        

        
  </div>
</section>







<section class="contacto  bg-white">
  
@include('includes.footer')

</section>



  
  


@endsection
