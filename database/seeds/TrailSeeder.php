<?php

use Illuminate\Database\Seeder;
use App\Trail;

class TrailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [
                'nome' => 'Abbazia Colico di Piona',
                'partenza' => 'Dorio',
                'arrivo' => 'Dorio',
                'vicino' => 'Colico - LC',
                'distanza' => 4,
                'durata' => '01:15' ,
                'percorso' => 'circolare',
                'difficolta' => 'facile',
                'bambini' => true,
                'animali' => true,
                'descrizione' => 'Escursione facile. Adatto a ogni livello di allenamento. Sentieri facilmente percorribili. Adatto a ogni livello di abilità. Il punto di partenza del Tour è in prossimità di un parcheggio.'
            ],
            [
                'nome' => 'Piano di Colico',
                'partenza' => 'Colico stazione',
                'arrivo' => 'Colico stazione',
                'vicino' => 'colico - LC',
                'distanza' => 8,
                'durata' => '02:21',
                'percorso' => 'circolare',
                'difficolta' => 'media',
                'bambini' => true,
                'animali' => true,
                'descrizione' => 'Percorso escursionistico intermedio. Buon allenamento richiesto. Sentieri facilmente percorribili. Adatto a ogni livello di abilità. Il punto di partenza del Tour e raggiungibile con i trasporti pubblici.'
            ],
            [
                'nome' => 'Varenna - Riva Grande',
                'partenza' => 'Perledo',
                'arrivo' => 'Perledo',
                'vicino' => 'Varenna - LC',
                'distanza' => 4,
                'durata' => '01:16',
                'percorso' => 'circolare',
                'difficolta' => 'facile',
                'bambini' => true,
                'animali' => true,
                'descrizione' => 'Escursione facile. Adatto a ogni livello di allenamento. Sentieri facilmente percorribili. Adatto a ogni livello di abilità. Il punto di partenza del Tour e raggiungibile con i trasporti pubblici.'
            ],
            [
                'nome' => 'Rifugio Stoppani - Itinerario ad anello da Bonacina',
                'partenza' => 'Funivia',
                'arrivo' => 'Funivia',
                'vicino' => 'Lecco - LC',
                'distanza' => 15,
                'durata' => '07:16',
                'percorso' => 'circolare',
                'difficolta' => 'alta',
                'bambini' => false,
                'animali' => false,
                'descrizione' => 'Percorso escursionistico per esperti. Ottimo allenamento richiesto. Sono richiesti passo sicuro, calzature robuste ed esperienza alpinistica. Il punto di partenza del Tour e raggiungibile con i trasporti pubblici.'
            ],
            [
                'nome' => 'Monte Croce di Muggio',
                'partenza' => 'Ristorante Shambala',
                'arrivo' => 'Croce di Muggio',
                'vicino' => 'Indovero - LC',
                'distanza' => 7.4,
                'durata' => '02:46',
                'percorso' => 'circolare',
                'difficolta' => 'media',
                'bambini' => false,
                'animali' => true,
                'descrizione' => ''
            ],
            [
                'nome' => 'Monte San Primo',
                'partenza' => 'La Baita',
                'arrivo' => 'La Baita',
                'vicino' => 'Magreglio - CO',
                'distanza' => 7.64,
                'durata' => '03:10',
                'percorso' => 'circolare',
                'difficolta' => 'media',
                'bambini' => true,
                'animali' => true,
                'descrizione' => 'Itinerario ad annello da Magreglio'
            ],
            [
                'nome' => 'Chiareggio, Alta Valmalenco ',
                'partenza' => '',
                'arrivo' => '',
                'vicino' => 'Chiareggio - SO',
                'distanza' => 2,
                'durata' => '1:30',
                'percorso' => 'circolare',
                'difficolta' => 'facile',
                'bambini' => true,
                'animali' => true,
                'descrizione' => 'In Alta Valmalenco troviamo questo piccolo borgo incastonato tra il Monte Disgrazia e il Pizzo Bernina, dove ogni anno in autunno si celebra la festa della Transumanza per il ritorno delle mucche dagli alpeggi. Ci possiamo arrivare facilmente in auto da Chiesa Valmalenco e, una volta giunti a un grande parcheggio in località Pian del Lupo a Chiareggio, prendiamo il sentiero per il Rifugio Gerli Porro (1965 m).
                Senza faticare molto percorriamo una mulattiera per circa 1 ora e mezza. La vista è magnifica e le pozze d’acqua in cui ci imbattiamo ci invitano a una rinfrescatina. Dal rifugio lo spettacolo del ghiacciaio del Ventina ci lascia senza respiro. La passeggiata è facile ed è adatta anche per famiglie con bambini piccoli o per persone poco allenate.'
            ],
            [
                'nome' => 'Riserva Naturale della Val di Mello',
                'partenza' => 'Val di Melo',
                'arrivo' => 'Val di Melo',
                'vicino' => 'Morbegno - SO',
                'distanza' => 4,
                'durata' => '1',
                'percorso' => 'circolare',
                'difficolta' => 'facile',
                'bambini' => true,
                'animali' => true,
                'descrizione' => 'La Val di Mello, a meno di due ore da Milano, è una valle laterale della Val Masino in provincia di Sondrio. La racchiudono rocce granitiche di grande importanza alpinistica e un torrente vi scorre al centro, lambendo fitti boschi di conifere alternati a pascoli. Giunti nella località San Martino (a soli pochi chilometri da Morbegno), all’ingresso del paese ogni circa 15 minuti parte il bus navetta (€ 4 a/r gli adulti e € 2 a/r i bambini), che ci accompagna fino all’imbocco della valle. Qui ci attende uno splendido laghetto naturale le cui acque, di un incredibile color verde smeraldo, resteranno impresse a lungo nei nostri ricordi.'
            ],
            [
                'nome' => 'Sentiero dello Spirito del Bosco',
                'partenza' => 'località Prim\'Alpe',
                'arrivo' => 'Terz\'Alpe',
                'vicino' => 'Canzo - CO',
                'distanza' => 1.5,
                'durata' => '4:00',
                'percorso' => 'lineare',
                'difficolta' => 'facile',
                'bambini' => true,
                'animali' => true,
                'descrizione' => 'Il Sentiero dello Spirito del Bosco è la passeggiata ideale per le famiglie con figli che vogliono vivere una vera avventura alla scoperta di animali, gnomi e figure magiche che animano la foresta.
                L’itinerario parte dalla località Prim’Alpe, dopo aver parcheggiato presso il Piazzale Giovanni XXIII nel comune di Canzo. La raggiungiamo attraverso una mulattiera immersa in un bel bosco (circa un’oretta, se abbiamo al seguito bambini piccoli dalla camminata piuttosto lenta). Da qui si diparte il Sentiero dello Spirito del Bosco che è contrassegnato da una scultura in legno e da un cartello e che terminerà a Terz’Alpe. Il percorso attraversa un torrente; è prevalentemente in piano e con piccoli tratti in salita.'
            ],
            [
                'nome' => 'Sentiero di Leonardo ',
                'partenza' => 'Milano',
                'arrivo' => 'San Bernardino',
                'vicino' => 'Milano - MI',
                'distanza' => 520,
                'durata' => 'giorni',
                'percorso' => 'lineare',
                'difficolta' => 'media',
                'bambini' => false,
                'animali' => false,
                'descrizione' => 'Un vero e proprio cammino, fra i sentieri in Lombardia questo nasce per celebrare i luoghi della Lombardia in cui Leonardo trascorse diciassette anni della sua vita. Il Sentiero di Leonardo è un percorso di ben 520 km di lunghezza che unise alcuin sentieri preesistenti e collega Milano a San Bernardino in Svizzera, costeggiando il fiume Adda, il Lago di Como e la Valchiavenna, passando per borghi antichi, boschi, centrali idroelettrche.
                Dal San Bernardino si scende poi fino a Milano, attraverso la Svizzera italiana, seguendo a un certo punto il corso del fiume Ticino e scendendo a sud di Milano passando per il Pavese. Sono previste 26 tappe ma, se una tale lunghezza ci spaventa, possiamo scegliere di volta in volta la tappa da trasformare nella nostra passeggiata (si tratta in media di 18-25 km). Sarà sufficiente per testimoniare la nostra ammirazione e il nostro interesse per questo genio.
                Ad esempio la tappa da Trezzo sull’Adda a Imbersago consente di camminare lungo il fiume, immaginando Leonardo che studia il moto dell’acqua o il volo degli uccelli. Oppure da fare è la tappa da Chiavenna a Madesimo perché, se Leonardo ha valicato le Alpi lombarde passando dallo Spluga, questo percorso tocca Chiavenna che vanta il centro storico meglio conservato della provincia di Sondrio. Nelle sue vicinanze ci son le indimenticabili Cascate dell’Acquaragia, che incantarono perfino Leonardo.
                Interessante è anche la tappa da Certosa di Pavia a Milano, non solo per uno dei monumenti più prestigiosi dell’arte italiana, ma anche perché vi è sepolto Ludovico il Moro che volle Leonardo a Milano per trasformarla in una capitale del Rinascimento.'
            ],
            [
                'nome' => 'Il sentiero del Viandante',
                'partenza' => 'Abbadia Lariana - LC',
                'arrivo' => 'Colico - LC',
                'vicino' => 'Lecco - LC',
                'distanza' => 45,
                'durata' => '3 giorni',
                'percorso' => 'lineare',
                'difficolta' => 'media',
                'bambini' => false,
                'animali' => true,
                'descrizione' => 'Per chi ha gambe e tempo, fra i migliori sentieri in i Lombardia è da non perdere Il Sentiero del Viandante, che costeggia la sponda destra del Lago di Como e ripercorre un’antica rotta commerciale. Parte da Abbadia Lariana e termina a Colico, passando per Mandello del Lario e Varenna. I suoi 45 km, costituiti da mulattiere e sentieri, sono costellati da angoli paesaggistici, paesini sul lago, borghi di pescatori, casali, uliveti e cave di marmo… e non solo.
                Gli scorci, i colori e la luce nell’alternanza delle stagioni rendono la passeggiata assai gradevole, se consideriamo anche la buona esposizione al sole e la poca fatica richiesta dalle quote modeste.'
            ]
        ];

        //ciclo dei dati dell'array e salvataggio alla fine
        foreach($datas as $data){
            $newTrail = new Trail();
            $newTrail->nome = $data['nome'];
            $newTrail->partenza = $data['partenza'];
            $newTrail->arrivo = $data['arrivo'];
            $newTrail->vicino = $data['vicino'];
            $newTrail->distanza = $data['distanza'];
            $newTrail->durata = $data['durata'];
            $newTrail->percorso = $data['percorso'];
            $newTrail->difficolta = $data['difficolta'];
            $newTrail->bambini = $data['bambini'];
            $newTrail->animali = $data['animali'];
            $newTrail->descrizione = $data['descrizione'];
            $newTrail->save(); 
        }
    }
}
