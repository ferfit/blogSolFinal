@extends('layouts.app')

@section('content')



<section class="terapias terapias--terapias mt-5">
  <div class="container">

    <img src="/storage/{{$post->imagen}}" class="rounded shadow img-fluid ">
    <h2 class="mt-5">{{$post->titulo}}</h2>
    <i>Por Solange Margot</i>
   
  
    <p class="mt-4">
      {!!html_entity_decode($post->contenido)!!}
    </p>
      
                

            

            
        

        
  </div>
</section>







<section class="contacto  bg-white">
  
@include('includes.footer')

</section>



  
  


@endsection
