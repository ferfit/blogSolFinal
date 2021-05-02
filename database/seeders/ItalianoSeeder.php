<?php

namespace Database\Seeders;

use App\Models\Italiano;
use Illuminate\Database\Seeder;

class ItalianoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $s1 = Italiano::create([
            'titulo'=>'Bioneuroemozione',
            'subtitulo'=>'EnricCorberaInstitute',
            'descripcion'=>'È un nuovo metodo per la gestione del benessere emozionale. L’elemento principale di lavoro è il cambio di percezione e la comprensione dell’informazione incosciente trasmessa dalla nostra cultura e dalla nostra famiglia, con l’obiettivo di raggiungere un cambiamento dell’informazione e pertanto creare una realtà nuova e più positiva per te stesso e per gli altri. La mia finalità è che guadagni libertà, pertanto la mia intenzione è offrirti gli strumenti con cui tu possa lavorare nei prossimi mesi in maniera indipendente. Si può realizzare in modalità presenziale o online.',
            'imagen'=>"upload-posts/zOW8aOBDQs5EiUFeg3qBTG2hWn0bgjMKk1c3pwX1.jpg",
            'precioEuro'=>'50',
            'estado'=> 1
        ]);
         $s2 = Italiano::create([
            'titulo'=>'Healing',
            'subtitulo'=>'Eivida. Scuola di Intuizione e Vita.',
            'descripcion'=>'È una stabilizzazione della tua Energia. Un Healing può calmare e/o cambiare problemi fisici ed emozionali tanto alla persona che lo riceve come a quella che lo dà. L’energia si muove e aiuta a lasciare andare ciò che in questo momento impedisce o limita la crescita. Nello stesso modo, si potrà accedere a realizzare un Healing a una vita passata che sia in sintonia con quella attuale. L’energia del Healing ti aiuta a stare in armonia con te stesso e a crescere in un modo semplice. Lo catalogo come un rinnovatore “massaggio Energetico”, per questo è una meravigliosa opzione da regalare o da regalarsi. Si può fare presenzialmente o a distanza.',
            'imagen'=>"upload-posts/RyUO2pRDX0JqLKcInUnqt50q6Sgo7WpRjaq5ks6o.jpg",
            'precioEuro'=>'35',
            'estado'=> 1
        ]);
        
        
        
        $s4 = Italiano::create([
            'titulo'=>'Registro Akashico',
            'subtitulo'=>' ',
            'descripcion'=>'È la porta di accesso agli archivi e all’informazione energetica della nostra Anima. L’Akasha è un luogo etereo in cui si accumulano le memorie di tutti gli esseri, siano essi persone, animali, piante e perfino minerali. È una forma di guardare il nostro interiore, la nostra realtà, ciò che stiamo attraversando e verso dove andiamo. Il mio ruolo è canalizzare l’informazione che i guardiani  dell’Akasha offrono per l’evoluzione e il bene maggiore del consultatore e dei suoi intimi. All’aprire questi archivi, per mezzo di una lettura, ci permette di connettere con quella parte di te stesso che in realtà forma parte del Tutto. La sessione può essere realizzata presenzialmente o a distanza.',
            'imagen'=>"upload-posts/seH21D27u0ZAQbEJjw9tfUBLX2iTlobP3DEDq8dA.jpg",
            'precioEuro'=>'40',
            'estado'=> 1
        ]);
        $s5 = Italiano::create([
            'titulo'=>'Consciousness Access Bars',
            'subtitulo'=>'Fondatore Gary Douglas',
            'descripcion'=>'È una tecnica manuale che elimina ciò che sovraccarica la nostra mente. Sono 32 punti nella testa che al toccarli delicatamente, senza pressione né massaggio, permettono di liberare lo stress connesso con differenti aree nella nostra vita, come per esempio: salute, denaro, relazioni, guarigione ecc. Al toccare questi punti si libera l’energia che si trovava bloccata in essi, ciò che ti impedisce di raggiungere i cambiamenti che desideri nella tua vita. Dopo una sessione di Access Bars uno si sente più allegro e con la mente più chiara. Gli effetti si vanno accumulando e quante più sessioni ricevi, meno rumore mentale e più pace sentirai. Promozioni speciali per pacchetti di sessioni. Si può realizzare solamente in forma presenziale. (90€ pacchetto di quattro sessioni)',
            'imagen'=>"upload-posts/xlbB4syIidiDsoTmUOFcXYlLEBD45udjieKcCjI1.jpg",
            'precioEuro'=>'30',
            'estado'=> 1
        ]);
        $s6 = Italiano::create([
            'titulo'=>'Terapia di coppia',
            'subtitulo'=>'Focalizzata sulle emozioni',
            'descripcion'=>'È una nuova esperienza correttiva del comportamento tra i membri di una coppia che consiste in sviluppare emozioni determinanti e usarle come nuove risposte pratiche. È fondamentale creare un vincolo sicuro nella coppia. Rafforziamo la comunicazione e la comprensione individuale e in gruppo, stimolando le abilità di negoziazione che si vanno scoprendo. I problemi diventano più chiari e meno pesanti quando non sono impregnati di conflitti di attaccamento e di insicurezze. Alimentiamo la valutazione personale per una trasformazione nelle relazioni di coppia.',
            'imagen'=>"upload-posts/oJAn3tR3urGULZTo5TyythShfKvmEvfH1QuZmLwK.jpg",
            'precioEuro'=>'66',
            'estado'=> 1
        ]);
        $s6 = Italiano::create([
            'titulo'=>'Reiki',
            'subtitulo'=>'Mikao Usui',
            'descripcion'=>'Il Reiki è una tecnica millenaria di origine giapponese. Si basa nel canalizzare l’energia interiore e anche quella che ci circonda, per poterla applicare lì dove esiste un blocco energetico che è il responsabile di quel dolore.
            Il Reiki è una disciplina olistica che si basa su tutti gli aspetti della persona, attuando a livello fisico, mentale ed emozionale. Le mani solo l’elemento trasmettitore che serve per portare questa energia positiva dove è necessaria, affinché agisca sanando ciò che non sta bene. Si può realizzare in forma presenziale o a distanza.
            ',
            'imagen'=>"upload-posts/sJkG2E6B4fsYNKV33D8hAGihwBQVKUYH3XPf7Zjg.jpg",
            'precioEuro'=>'30',
            'estado'=> 1
        ]); 

        $s3 = Italiano::create([
            'titulo'=>'Costellazioni Individuali',
            'subtitulo'=>'Istituto di costellazioni familiari di BriggiteChampetier de Ribes',
            'descripcion'=>'È una tecnica creata da Bert Hellinger che si basa sull analisi multigenerazionale derivando nella Terapia Sistemica. Le persone sono capaci di percepire di forma incosciente modelli e strutture nelle relazioni familiari che rimangono memorizzati, servendo come schemi affettivi e cognitivi che hanno un effetto sulla propria condotta. È una terapia che serve per trattare differenti temi come per esempio problemi con la famiglia, con il lavoro, nella coppia ed emozioni come l’abbandono e la tristezza. Si approfondisce anche riguardo alla malattie.',
            'imagen'=>"upload-posts/SZWy2t2LPAk1DxPXFbN3FlXlN833nq1OiryUPbcQ.jpg",
            'precioEuro'=>'35',
            'estado'=> 1
        ]);
        
    }
}
