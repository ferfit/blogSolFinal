<?php

namespace Database\Seeders;

use App\Models\Ingle;
use Illuminate\Database\Seeder;

class IngleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $s1 = Ingle::create([
            'titulo'=>'Bioneuroemoción',
            'subtitulo'=>'Enric Corbera Institute',
            'descripcion'=>'It is a new method to manage emotional well-being. The main element we work with
            is  the change of perspective and understanding of the unconscious information that is
            delivered to us through our cultural background and our family. Its main goal is to
            achieve a change of information and therefore create a new, more positive reality for
            yourself and those around you. My goal is to help you gain freedom, so I am willing to
            give you the tools and tasks to work independently for the following months. It can be
            done in person or remotely.',
            'imagen'=>"upload-posts/zOW8aOBDQs5EiUFeg3qBTG2hWn0bgjMKk1c3pwX1.jpg",
            'precioEuro'=>'50',
            'estado'=> 1
        ]);
         $s2 = Ingle::create([
            'titulo'=>'Healing',
            'subtitulo'=>'Eivida. School of Intuition and Life.',
            'descripcion'=>'It’s an Energy stabilization. A Healing can relieve and/or change both physical and/or
            emotional problems not only to the recipient but also to the person providing it.
            Energy moves around and it helps you let go of whatever it’s blocking or limiting
            growth. Furthermore, Healings can also be performed to past lives that are aligned
            with the current life. The energy of the Healing helps you stay in harmony with
            yourself and grow in a simple way. I often label it as a great “Energy massage” so it’s a
            great option to gift yourself or others. It can be done in person or remotely.  We can
            do a Healing to people, animals, trees, houses, everything!',
            'imagen'=>"upload-posts/RyUO2pRDX0JqLKcInUnqt50q6Sgo7WpRjaq5ks6o.jpg",
            'precioEuro'=>'35',
            'estado'=> 1
        ]);
        
        
        
        $s4 = Ingle::create([
            'titulo'=>'Akashic Records',
            'subtitulo'=>' ',
            'descripcion'=>'It is the gate to the files and the energetic information of our Soul. The Akasha is the
            ethereal place where memories of all beings (people, plants, animals, even minerals)
            are stored. It is a way to look towards our inner beings, our reality, what we are going
            through and where we are going. My role is to channel the information that Akasha
            Guardians provide to evolve and achieve the greater good for the consultant and those
            around them.
            By opening these files, we are allowed to connect with that part of yourself that it is
            actually a part of Everything. The session can be done in person or remotely.',
            'imagen'=>"upload-posts/seH21D27u0ZAQbEJjw9tfUBLX2iTlobP3DEDq8dA.jpg",
            'precioEuro'=>'40',
            'estado'=> 1
        ]);
        $s5 = Ingle::create([
            'titulo'=>'Access Consciousness Bars',
            'subtitulo'=>'Creator Gary Douglas',
            'descripcion'=>'It is a manual technique that deletes what is overwhelming our mind. There are 32
            spots in the head that, when touched softly, without applying pressure or massaging,
            release stress that is connected to different areas of our life, such as health, money,
            relationships, healing, etc. When touching these spots, the blocked energy they carry is
            released, this energy being what refrains you from achieving the change you wish to
            do in life. After a session of Access Bars, one feels happier and the mind feels clearer.
            The effects sum up, so the more sessions you take, the less mind noise and more
            peace you will feel. There are special discounts for session packs. Only in person.',
            'imagen'=>"upload-posts/xlbB4syIidiDsoTmUOFcXYlLEBD45udjieKcCjI1.jpg",
            'precioEuro'=>'30',
            'estado'=> 1
        ]);
        $s6 = Ingle::create([
            'titulo'=>'Couples Therapy',
            'subtitulo'=>'Focused on emotions.',
            'descripcion'=>'It’s a new behavior-correcting experience that is aimed to couples that consists on
            developing key emotions and using them as new practical answers. Creating a solid,
            safe bond within the couple is fundamental. We enhance communication and
            individual/team understanding, and we stimulate negotiating abilities as they discover
            them. Problems become clearer and lighter when they are not tainted with bonding
            conflicts or insecurities. We nurture self appreciation for a couple relationship
            transformation.',
            'imagen'=>"upload-posts/oJAn3tR3urGULZTo5TyythShfKvmEvfH1QuZmLwK.jpg",
            'precioEuro'=>'66',
            'estado'=> 1
        ]);
        $s6 = Ingle::create([
            'titulo'=>'Reiki',
            'subtitulo'=>'Mikao Usui',
            'descripcion'=>'Reiki is a millennial technique of Japanese origins. It is based in channeling our inner
            and surrounding energy to apply it wherever there is an energetic blockage that is
            causing pain. 
            Reiki is a holistic discipline that deals with every aspect of a person, acting on physical,
            mental and emotional levels. The hands are the transmitting element that we use to
            carry that positive energy where it is needed, so it can heal whatever is not right. It can
            be done in person or remotely.',
            'imagen'=>"upload-posts/sJkG2E6B4fsYNKV33D8hAGihwBQVKUYH3XPf7Zjg.jpg",
            'precioEuro'=>'30',
            'estado'=> 1
        ]); 

        $s3 = Ingle::create([
            'titulo'=>'Individual Constellations',
            'subtitulo'=>'Briggite Champetier de Ribes Family Constellations Institute.',
            'descripcion'=>'It is a technique created by Bert Hellinger that is based in a multi-generational analysis
            that has a connection with Systemic Therapy. People are able to unconsciously
            perceive patterns and family relationship structures that are memorized, helping as
            emotional and cognitive patterns that affect their behaviour. It is a therapy that helps
            treat different topics like family or work-related problems and emotions like
            abandonment or sadness. It can be used to go deeper into illnesses or diseases.',
            'imagen'=>"upload-posts/SZWy2t2LPAk1DxPXFbN3FlXlN833nq1OiryUPbcQ.jpg",
            'precioEuro'=>'35',
            'estado'=> 1
        ]);
        
    }
}
