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
            <li class="menu__item"><a href="/" class="menu__link">INICIO</a></li>
            <li class="menu__item"><a href="/terapias" class="menu__link">TERAPIAS</a></li>
            <li class="menu__item"><a href="{{route ('quiensoy')}}" class="menu__link">QUIEN SOY</a> </li>
            <li class="menu__item"><a href="/blog" class="menu__link">BLOG</a></li>
            <li class="menu__item"><a href="{{route ('contacto')}}" class="menu__link">CONTACTO</a></li>
        </ul>
        
    </nav>

    <div class="header__idiomas ml-5 my-auto">  
        <div class="row">

            <div class=" overflow-hidden">
                  <a href="{{ route('inicio-ingles')}}"><img class="w-75" src="{{ asset('img/eeuu.png') }}" alt=""></a>
            </div>

            <div class="">
                <a href="{{ route('inicio-italiano')}}"><img class="w-75" src="{{ asset('img/italia.png') }}" alt=""></a>
            </div>

        </div>
    
    </div>

    
</div>

</header>