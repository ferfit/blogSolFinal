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
            <li class="menu__item"><a href="{{route ('inicio-ingles')}}" class="menu__link">HOME</a></li>
            <li class="menu__item"><a href="{{route ('terapias-ingles')}}" class="menu__link">THERAPIES</a></li>
            <li class="menu__item"><a href="{{route ('quiensoy-ingles')}}" class="menu__link">ABOUT US</a> </li>
            <li class="menu__item"><a href="{{route ('blog-ingles')}}" class="menu__link">BLOG</a></li>
            <li class="menu__item"><a href="{{route ('contacto-ingles')}}" class="menu__link">CONTACT</a></li>
        </ul>
        
    </nav>

    <div class="header__idiomas ml-5 my-auto">  
        <div class="row">

            <div class=" overflow-hidden">
                  <a href="{{ route('inicio')}}"><img class="w-75" src="{{ asset('img/espanol.png') }}" alt=""></a>
            </div>

            <div class="">
                <a href="{{ route('inicio-italiano')}}"><img class="w-75" src="{{ asset('img/italia.png') }}" alt=""></a>
            </div>

        </div>
    
    </div>

    
</div>

</header>