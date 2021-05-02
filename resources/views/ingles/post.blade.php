@extends('layouts.appIngles')

@section('content')



<section class="terapias terapias--terapias mt-5">
  <div class="container">

    <img src="/storage/{{$post->imagen}}" class="rounded shadow img-fluid ">
    <h2 class="mt-5">{{$post->titulo_en}}</h2>
    <i>For Solange Margot</i>
   
  
    <p class="mt-4">
      {!!html_entity_decode($post->contenido_en)!!}
    </p>
      
                

            

            
        

        
  </div>
</section>







<section class="contacto  bg-white">
  
@include('includes.footerIngles')

</section>



  
  


@endsection
