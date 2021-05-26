<!-- 
 |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
 | Header
 |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
 !-->
 <header class="header">

<!-- contenedor de redes sociales -->


<div class="header__contenedor-principal">
    

    
    <!-- icono hamburguesa -->
    <div id="hamburger" class="hamburger">

        <span class="hamburger__linea"></span>
    
        <span class="hamburger__linea"></span>
    
        <span class="hamburger__linea"></span>
        
    </div>

    <!-- menu -->
    <nav class="menu" id="menu" >
        <ul class="menu__list m-0">
            <li class="menu__item"><a href="{{route ('inicio-italiano')}}" class="menu__link">INIZIO</a></li>
            <li class="menu__item"><a href="{{route ('terapias-italiano')}}" class="menu__link">TERAPIE</a></li>
            <li class="menu__item"><a href="{{route ('quiensoy-italiano')}}" class="menu__link">SU DI ME</a> </li>
            <li class="menu__item"><a href="{{route ('blog-italiano')}}" class="menu__link">BLOG</a></li>
            <li class="menu__item"><a href="{{route ('contacto-italiano')}}" class="menu__link">CONTATTO</a></li>
        </ul>
        
    </nav>

    <div class="header__idiomas ml-5 my-auto">  
        <div class="row">

            <div class=" overflow-hidden">
                  <a href="{{ route('inicio')}}"><img class="w-75" src="{{ asset('img/espanol.png') }}" alt=""></a>
            </div>

            <div class="">
                <a href="{{route ('inicio-ingles')}}"><img class="w-75" src="{{ asset('img/eeuu.png') }}" alt=""></a>
            </div>

        </div>
    
    </div>

    
</div>

</header>