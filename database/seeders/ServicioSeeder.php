<?php

namespace Database\Seeders;

use App\Models\Servicio;
use Illuminate\Database\Seeder;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $s1 = Servicio::create([
            'titulo'=>'Bioneuroemoción',
            'subtitulo'=>'Enric Corbera Institute',
            'descripcion'=>'Es un nuevo método para la gestión del bienestar emocional. El elemento
            principal de trabajo es el cambio de percepción y la comprensión de la
            información inconsciente transmitida por nuestra cultura y nuestra familia, con
            el objetivo de logra un cambio de la información y por lo tanto crear una
            realidad nueva y más positiva, para ti y tú alrededor. Mi finalidad es que ganes
            libertad, por lo que mi intensión es brindarte las herramientas con las que
            puedas trabajar en los próximos meses de manera independiente. Se puede
            realizar de manera presencial o virtual.',
            'imagen'=>"upload-posts/zOW8aOBDQs5EiUFeg3qBTG2hWn0bgjMKk1c3pwX1.jpg",
            'precioEuro'=>'50',
            'precioPeso'=>'3500',
            'estado'=> 1
        ]);
         $s2 = Servicio::create([
            'titulo'=>'Healing',
            'subtitulo'=>'Eivida. Escuela de Intuición y Vida',
            'descripcion'=>'Es una estabilización de tu Energía. Un Healing puede aliviar y/o cambiar
            problemas físicos y emocionales tanto a la persona que lo recibe como a la
            persona que lo da. Se mueve la energía y ayuda a soltar lo que en este
            momento impide o limita el crecimiento. Asimismo, se podrá acceder a realizar
            un healing a una vida pasada que este en sintonía con la vida actual. La
            energía de Healing te ayuda a estar en armonía contigo mismo y a crecer de
            una manera simple. Yo lo catalogo como un renovador “masaje Energético”,
            por lo que es una maravillosa opción para regalar y regalártelo. Se puede hacer
            presencial y también a distancia.',
            'imagen'=>"upload-posts/RyUO2pRDX0JqLKcInUnqt50q6Sgo7WpRjaq5ks6o.jpg",
            'precioEuro'=>'35',
            'precioPeso'=>'2500',
            'estado'=> 1
        ]);
        
        
        
        $s4 = Servicio::create([
            'titulo'=>'Registros Akáshicos',
            'subtitulo'=>' ',
            'descripcion'=>'Es la puerta de entrada a los archivos y a la información energética de nuestra
            Alma. El Akasha es el lugar etéreo donde se almacenan las memorias de todos
            los seres ya sean personas, animales, plantas y hasta minerales. Es una forma
            de mirar nuestro interior, nuestra realidad, qué es lo que estamos atravesando
            y hacia donde vamos. Mi rol es canalizar la información que los guardianes del
            Akasha brindan para la evolución y el mayor bien del consultante y sus
            allegados.
            Al abrir estos archivos, mediante una lectura, nos permite conectar con esa
            parte de ti mismo que es en realidad parte del Todo. La sesión se puede
            realizar de manera presencial o a distancia.',
            'imagen'=>"upload-posts/seH21D27u0ZAQbEJjw9tfUBLX2iTlobP3DEDq8dA.jpg",
            'precioEuro'=>'40',
            'precioPeso'=>'3000',
            'estado'=> 1
        ]);
        $s5 = Servicio::create([
            'titulo'=>'Barras de Access Consciousness',
            'subtitulo'=>'Creator Gary Douglas',
            'descripcion'=>'Es una técnica manual que elimina lo que sobrecarga nuestra mente. Son 32
            puntos en la cabeza que, al tocarlos suavemente, sin presión ni masaje,
            permiten liberar el estrés conectado con diferentes áreas en nuestras vidas,
            entre ellos: salud, dinero, relaciones, sanación, etc. Al tocar estos puntos se
            libera la energía que esta bloqueada en ellos, lo que te impide lograr los
            cambios que deseas en tu vida. Después de una sesión de Barras de Access
            uno se siente más alegre y con la mente más clara. Los efectos se van
            acumulando, y cuantas más sesiones recibes menos ruido mental y más paz
            sentirás. Promociones especiales por paquetes de sesiones. Solo se pueden
            realizar de forma presencial.',
            'imagen'=>"upload-posts/xlbB4syIidiDsoTmUOFcXYlLEBD45udjieKcCjI1.jpg",
            'precioEuro'=>'30',
            'precioPeso'=>'3000',
            'estado'=> 1
        ]);
        $s6 = Servicio::create([
            'titulo'=>'Terapia de Parejas',
            'subtitulo'=>'Focalizada en las emociones',
            'descripcion'=>'Es una nueva experiencia correctiva del comportamiento entre los miembros de
            una pareja que consiste en desarrollar emociones claves, y usarlas como
            nuevas respuestas prácticas. Es fundamental crear un vínculo seguro en la
            pareja. Potenciamos la comunicación y la comprensión individual y en equipo, y
            estimulamos las habilidades de negociación que vayan descubriendo. Los
            problemas se vuelven más claros y menos pesados cuando no están impregnados de conflictos de apego e inseguridades. Alimentamos la
            valoración personal para una trasformación en las relaciones de pareja.',
            'imagen'=>"upload-posts/oJAn3tR3urGULZTo5TyythShfKvmEvfH1QuZmLwK.jpg",
            'precioEuro'=>'66',
            'precioPeso'=>'5500',
            'estado'=> 1
        ]);
        $s6 = Servicio::create([
            'titulo'=>'Reiki',
            'subtitulo'=>'Mikao Usui',
            'descripcion'=>'El Reiki es una técnica milenaria de origen japonés. Se basa en canalizar la
            energía interior y también la que nos rodea, para poder aplicarla allí donde
            exista un bloqueo energético que sea el responsable de ese dolor.
            El Reiki es una disciplina holística que se centra en todos los aspectos de la
            persona actuando a nivel físico, mental y emocional. Las manos son el
            elemento trasmisor que sirve para llevar esa energía positiva donde es
            necesaria, para que actúe sanando aquello que no va bien. Se puede realizar
            de manera presencial y a distancia.',
            'imagen'=>"upload-posts/sJkG2E6B4fsYNKV33D8hAGihwBQVKUYH3XPf7Zjg.jpg",
            'precioEuro'=>'30',
            'precioPeso'=>'2000',
            'estado'=> 1
        ]); 

        $s3 = Servicio::create([
            'titulo'=>'Constelaciones Individuales',
            'subtitulo'=>'Instituto de Constelaciones Familiares de Briggite Champetier de Ribes',
            'descripcion'=>'Es una técnica creada por Bert Hellinger que se basa en el análisis
            multigeneracional derivando en la Terapia Sistémica. Las personas son
            capaces de percibir de forma inconsciente patrones y estructuras en las
            relaciones familiares que quedan memorizados, sirviendo como esquemas
            afectivos y cognitivos que afectan a su conducta. Es una terapia que sirve
            para tratar diferentes temas como problemas con la familia, con el trabajo, con
            la pareja, y emociones como el abandono, la tristeza, etc. Se profundiza, también,
            con respecto a enfermedades.',
            'imagen'=>"upload-posts/SZWy2t2LPAk1DxPXFbN3FlXlN833nq1OiryUPbcQ.jpg",
            'precioEuro'=>'35',
            'precioPeso'=>'2500',
            'estado'=> 1
        ]);
        
    }
}
