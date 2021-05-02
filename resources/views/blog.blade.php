@extends('layouts.app')

@section('content')
<section class="banner m-0" 
data-aos="fade-opacity"
data-aos-duration="1500">

    <div class="container-fluid p-0 m-0 banner__cont-principal banner__cont-principal--blog">

    <h1 class="banner__titulo"
    data-aos="fade-up"
    data-aos-offset="200"
    data-aos-delay="100"
    data-aos-duration="2000"
    >Blog</h1>
    
    </div>

</section>


<section class="terapias terapias--terapias">
  <div class="container">

        

        

        

            @foreach($posts as $post)
                <div class="terapias__cont-terapia  row rounded p-3 shadow mt-3"
                data-aos="fade-up"
                data-aos-duration="1500"
                data-aos-delay="500"
                >
                    <div class="col-12 col-lg-4 terapias__cont-imagen overflow-hidden rounded  p-0">
                        <img src="/storage/{{$post->imagen}}" alt="" class="w-100" >
                    </div>
                    

                    <div class="col-12 col-lg-8">
                        <h2 class="terapias__titulo mt-4 text-dark">{{ Str::limit (($post->titulo),50)}}</h2>
                        <p class="terapias__descripcion mt-3 text-dark">
                        {!! Str::limit ( html_entity_decode($post->contenido),400) !!}
                        </p>
                        <a href="{{ route('post',$post)}} " ><span class="terapias__leermas text-dark">Leer más...</span></a>
                    </div>
                    
                </div>
            @endforeach

            <div class="container d-flex justify-content-center mt-5">
                {{$posts->links()}}
            </div>
            

            
        

        
  </div>
</section>







<section class="contacto  bg-white">
  
@include('includes.footer')

</section>



  
  


@endsection
