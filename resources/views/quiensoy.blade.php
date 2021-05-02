@extends('layouts.app')

@section('content')


<section class="contacto  bg-white">
  <!--   tamaño movil--> 
  <div class="d-md-none container overflow-hidden">

      
        
        
        <h2 class="text-start my-3 px-3 quiensoy__titulo">Hola yo soy, <br>
        <span class="ml-5">
          Solange Margot
        </span>
        </h2>
        
        <img src="{{ asset ('img/quiensoy.jpeg')}}" alt="" class=" w-100 quiensoy__imagen mb-3 shadow">
         
        <p class="text-justify px-3 quiensoy__parrafo ">
        Nací en la Patagonia Argentina en una de las ciudades más australes del
        mundo. Desde pequeña soy una buscadora incansable, abogada y licenciada
        en criminalística en mi país, me pase los últimos años de mis carreras viajando
        por Sudamérica, sola y con el estilo backpacker. Surfeando la espontaneidad,
        deshaciendo la rutina y los cimientos que me intentaba hacer “creer” para
        adaptarme a un sistema que considero “obsoleto”.
        <br>
        Mi despertar comenzó en un viaje con amigos a Brasil, donde pase un año
        nuevo en Rio de Janeiro “Reveillon”, una fiesta y un ritual personal donde lloré,
        me perdone y me prometí buscar mi auténtica Felicidad.
        Regrese a Buenos Aires y en cuestión de un mes había embalado mi vida y
        solo me permití llevar conmigo lo que cupiera en una mochila. Mi destino:
        Recorrer el Mundo.
        <br>
        ¡Que ingenua fui! Porque luego de aterrizar en Barcelona, España, me crucé a
        Ibiza y fue en esta Isla mágica donde empecé a experimentar cada minuto, en
        cada experiencia y con cada emoción la sincronicidad de que mi destino final,
        simplemente, era mi Isla bonita. Mi primer año fueron vacaciones absolutas.
        Tiempo de merecimiento, gozo y disfrute para romper mi programación, mis
        estructuras y creencias, tiempo para reconstruirme desde el Amor propio. Y así
        fue que, al soltar, soltar y soltar, deje espacio para mi verdadero Ser, para
        cultivar la esencia de mi Corazón.
        <br>
        En este arduo proceso en el que ya llevo casi 10 años, me he enamorado de la
        vida, de mí misma y de mi maravilloso esposo italiano con el que viajamos a
        diferentes continentes cada año. Elegimos estratégicamente distintos países
        para seguir alimentando nuestra pasión y continuar estudiando, pero esta vez
        explorando el mundo holístico, iniciándome en diversas terapias, talleres,
        retiros, compartiendo Sabidurías con comunidades ancestrales, empapándome
        de todo y de todos para que hoy pueda estar aquí, enraizada con mi propósito
        de acompañar a muchos otros Buscadores hacia el encuentro con su
        verdadero Ser.
        Me abro a la vida y le entrego al Universo mi Sueño hecho Realidad.
        </p> 
     
      
  </div>
<!--   tamaño tablet y escritorio--> 

  <div class="d-none d-md-block container overflow-hidden">

      
        
        
        <h2 class="text-start my-3 px-3 quiensoy__titulo">Hola yo soy, <br>
        <span class="ml-5">
          Solange Margot
        </span>
        </h2>
        
        <img src="{{ asset ('img/quiensoy.jpeg')}}" alt="" class=" h-100 quiensoy__imagen float-right ml-4 shadow">
         
        <p class="text-justify px-3 quiensoy__parrafo ">
        Nací en la Patagonia Argentina en una de las ciudades más australes del
        mundo. Desde pequeña soy una buscadora incansable, abogada y licenciada
        en criminalística en mi país, me pase los últimos años de mis carreras viajando
        por Sudamérica, sola y con el estilo backpacker. Surfeando la espontaneidad,
        deshaciendo la rutina y los cimientos que me intentaba hacer “creer” para
        adaptarme a un sistema que considero “obsoleto”.
        <br>
        Mi despertar comenzó en un viaje con amigos a Brasil, donde pase un año
        nuevo en Rio de Janeiro “Reveillon”, una fiesta y un ritual personal donde lloré,
        me perdone y me prometí buscar mi auténtica Felicidad.
        Regrese a Buenos Aires y en cuestión de un mes había embalado mi vida y
        solo me permití llevar conmigo lo que cupiera en una mochila. Mi destino:
        Recorrer el Mundo.
        <br>
        ¡Que ingenua fui! Porque luego de aterrizar en Barcelona, España, me crucé a
        Ibiza y fue en esta Isla mágica donde empecé a experimentar cada minuto, en
        cada experiencia y con cada emoción la sincronicidad de que mi destino final,
        simplemente, era mi Isla bonita. Mi primer año fueron vacaciones absolutas.
        Tiempo de merecimiento, gozo y disfrute para romper mi programación, mis
        estructuras y creencias, tiempo para reconstruirme desde el Amor propio. Y así
        fue que, al soltar, soltar y soltar, deje espacio para mi verdadero Ser, para
        cultivar la esencia de mi Corazón.
        <br>
        En este arduo proceso en el que ya llevo casi 10 años, me he enamorado de la
        vida, de mí misma y de mi maravilloso esposo italiano con el que viajamos a
        diferentes continentes cada año. Elegimos estratégicamente distintos países
        para seguir alimentando nuestra pasión y continuar estudiando, pero esta vez
        explorando el mundo holístico, iniciándome en diversas terapias, talleres,
        retiros, compartiendo Sabidurías con comunidades ancestrales, empapándome
        de todo y de todos para que hoy pueda estar aquí, enraizada con mi propósito
        de acompañar a muchos otros Buscadores hacia el encuentro con su
        verdadero Ser.
        Me abro a la vida y le entrego al Universo mi Sueño hecho Realidad.
        </p> 
     
      
  </div>
      
    
    

  

  @include('includes.footer')

</section>


  
  


@endsection
