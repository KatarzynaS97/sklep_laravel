<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //DRESS
        DB::table('dress')->insert([
            'name'=> 'Sukienka Wiosenna',
            'price'=>120,
            'image'=>'../img/sukienka2.png',
            'description'=>' Sukienka , na ramionczkach . Model zwiewny, przedłużany z tyłu. Dekolt głęboki, w pasie elastyczna
                    gumka. W zestawie wiązany pasek z dopasowanego materiału. Wykonana z przewiewnej wiskozy. Ozdobiona
                    printem kawiatowym. Gumka w pasie rozciąga się do: S = 88 cm, M = 91 cm. Sukienka będzie doskonała na
                    codzienne wyjścia.',
            'product_type'=>'dress',
            
        ]); 
       

        DB::table('dress')->insert([
                'name'=> 'Sukienka Wiosenna',
                'price'=>150,
                'image'=>'../img/sukienka6.png',
                 'description'=>'Sukienka krótki rękaw. Model zwiewny, długość MAXI  . Dekolt V w pasie elastyczna
                        gumka.  Wykonana z przewiewnej wiskozy. Ozdobiona
                        printem kawiatowym. Gumka w pasie rozciąga się do: S = 88 cm, M = 91 cm. Sukienka będzie doskonała na
                        codzienne wyjścia.',
                        'product_type'=>'dress',
        ]);
        DB::table('dress')->insert([
                'name'=> 'Sukienka  wiosenna Maxi',
                'price'=>350,
                'image'=>'../img/sukienka4.png',
                 'description'=>'Biała elegancka wygodna sukienka. Krótki rękaw z falbanką. Model zwiewny, długość MAXI. Dekolt V w pasie 
                       pasek wiązany do tyłu. Wykonana z przewiewnej wiskozy. Sukienka będzie doskonała na
                        służbowe i prywatne wyjścia.',
                        'product_type'=>'dress',
            ]);
            DB::table('dress')->insert([
                'name'=> 'Sukienka  wiosenna Maxi',
                'price'=>250,
                'image'=>'../img/sukienka5.png',
                 'description'=>'Sukienka dopadowana, długość MINI, wyciecie w talii. Jeden rękaw z ozdobą z piórek w kolorze rózowym, drugie ramie odkryte. Wykonana z dopadowanego materiuału. Ozdobiona mieniącymi się diamencikami
                Sukienka będzie doskonała na imprezy okolicznościowe ale także na codzienne wyjścia.',
                'product_type'=>'dress',
            ]);
            DB::table('dress')->insert([
                'name'=> 'Sukienka na wesele',
                'price'=>230,
                'image'=>'../img/sukienka3.png',
                 'description'=>' Sukienka idealna na wesele lub inna impreze okolicznościową , długość przed kolano wyciecie w talii. Na ramionczkach, dekold koronkowy.Od pasa w dół tiul.',
                 'product_type'=>'dress',
            ]);
            DB::table('dress')->insert([
                'name'=> 'Sukienka letnia',
                'price'=>280,
                'image'=>'../img/sukienka7.png',
                 'description'=>' Sukienka letnia wzór kwiatowy ,  wyciecie w talii. Dłuższy tył sukienki, na ramiączkach. Dekold w literkę V . Delikatne wycięcie na plecach. Ozdobiona printem kwiatowym. 
                Sukienka będzie doskonała na imprezy okolicznościowe ale także na codzienne wyjścia. ',
                'product_type'=>'dress',
            ]);
            DB::table('dress')->insert([
                'name'=> 'Sukienka wieczorowa',
                'price'=>180,
                'image'=>'../img/sukienka8.png',
                 'description'=>'Sukienka wieczorowa, długość MAXI z wycięciem na nogę. Dekold w literkę V, plecy odkryte. Ozdobiona brokatem. 
                Sukienka będzie doskonała na imprezy okolicznościowe. ',
                'product_type'=>'dress',
            ]);
            DB::table('dress')->insert([
                'name'=> 'Sukienka  wiosenna Maxi',
                'price'=>280,
                'image'=>'../img/sukienka9.png',
                 'description'=>' Sukienka długa na ciękich ramionczkach, dekold kopertowy.  Model zwiewny, długość MAXI , wiązanie w pasie. Wykonana z przewiewnej wiskozy.  Sukienka będzie doskonała na imprezy okolicznościowe. ',
                 'product_type'=>'dress',
            ]);

            //TROUSERS
            DB::table('trousers')->insert([
                'name'=> 'Spodnie Jeansy',
                'price'=>89.99,
                'image'=>'../img/spodnie1.png',
                 'description'=>'Jasnoniebieskie Jeansy Skinny z Przetarciami i Dziurami Honnaira.',
                 'product_type'=>'trousers',

            ]);
            DB::table('trousers')->insert([
                'name'=> 'Spodnie sportowe',
                'price'=>129.99,
                'image'=>'../img/spodnie2.png',
                 'description'=>'Spodnie sportowe z bawełną. Nogawki ze ściągaczami.',
                 'product_type'=>'trousers',

            ]);
            DB::table('trousers')->insert([
                'name'=> 'Spodnie Eleganckie',
                'price'=>99.99,
                'image'=>'../img/spodnie3.png',
                 'description'=>'Spodnie eleganckie idealne na biznesowe spotkania jak i na codzień.',
                 'product_type'=>'trousers',
            ]);
            DB::table('trousers')->insert([
                'name'=> 'Spodnie skórzane',
                'price'=>119.99,
                'image'=>'../img/spodnie4.png',
                 'description'=>'Spodnie eleganckie z wysokim stanem. Sprawdzą się idealnie na wyjścia biznesowe ale także na codzień.',
                 'product_type'=>'trousers',
            ]);
            DB::table('trousers')->insert([
                'name'=> 'Spodnie ze  ściągaczami',
                'price'=>99.99,
                'image'=>'../img/spodnie5.png',
                 'description'=>'Spodnie eleganckie z wysokim stanem. Sprawdzą się idealnie na wyjścia biznesowe ale także na codzień.',
                 'product_type'=>'trousers',
            ]);
            DB::table('trousers')->insert([
                'name'=> 'Spodnie dresowe',
                'price'=>199.99,
                'image'=>'../img/spodnie6.png',
                 'description'=>'Spodnie dresowe z szerokimi nogawkami i kieszeniami.',
                 'product_type'=>'trousers',
            ]);
            DB::table('trousers')->insert([
                'name'=> 'Jeansy z dziurami i przetarciami',
                'price'=>199.99,
                'image'=>'../img/spodnie7.png',
                 'description'=>'Spodnie jeansy wysoki stan z dziurami i przetarciamy.',
                 'product_type'=>'trousers',
            ]);
            DB::table('trousers')->insert([
                'name'=> 'Jeansy Boyfriend',
                'price'=>299.99,
                'image'=>'../img/spodnie8.png',
                 'description'=>'Spodnie jeansy boyfriend, wysoki stan. ',
                 'product_type'=>'trousers',
            ]);
            //TSHIRT
            DB::table('tshirt')->insert([
                'name'=> 'Biała Bluzka',
                'price'=>99.99,
                'image'=>'../img/bluzka1.png',
                 'description'=>'Koszulka Biała , krótki rękaw. ',
                 'product_type'=>'koszukla',
            ]);
            DB::table('tshirt')->insert([
                'name'=> 'Czerwona Bluzka',
                'price'=>99.99,
                'image'=>'../img/bluzka2.png',
                 'description'=>'Koszulka Czerwona , krótki rękaw. ',
                 'product_type'=>'tshirt',
            ]);
            DB::table('tshirt')->insert([
                'name'=> 'Zestaw trzech koszulek',
                'price'=>119.99,
                'image'=>'../img/bluzka3.png',
                 'description'=>'Zestaw trzech koszulek krótki rękaw trzy kolory ',
                 'product_type'=>'tshirt',
            ]);
            DB::table('tshirt')->insert([
                'name'=> 'Biała koszulka z nadrukiem',
                'price'=>129.99,
                'image'=>'../img/bluzka4.png',
                 'description'=>'Biała koszulka z nadrukiem na zółtym tle. ',
                 'product_type'=>'tshirt',
            ]);
            DB::table('tshirt')->insert([
                'name'=> 'Bluzka sportowa',
                'price'=>89.99,
                'image'=>'../img/bluzka5.png',
                 'description'=>'Bluzka sportowa idealna na trening. ',
                 'product_type'=>'tshirt',
            ]);
            DB::table('tshirt')->insert([
                'name'=> 'Koszulka Szara',
                'price'=>79.99,
                'image'=>'../img/bluzka6.png',
                 'description'=>'Koszulka Szara z nadrukiem. ',
                 'product_type'=>'tshirt',
            ]);
            DB::table('tshirt')->insert([
                'name'=> 'Koszulka zielona',
                'price'=>99.99,
                'image'=>'../img/bluzka8.png',
                 'description'=>'Koszulka zielona z wycięciem  ',
                 'product_type'=>'tshirt',
            ]);
            DB::table('tshirt')->insert([
                'name'=> ' Bluzka w paski',
                'price'=>139.99,
                'image'=>'../img/bluzka7.png',
                 'description'=>'Koszulka w paski z naszywką',
                 'product_type'=>'tshirt',
            ]);
            //shirt
            DB::table('shirt')->insert([
                'name'=> ' Koszula biała oversize',
                'price'=>119.99,
                'image'=>'../img/koszula1.png',
                 'description'=>'Koszula oversize z guzikami idealna na wyjścia biznesowe i na codzień ',
                 'product_type'=>'shirt',
            ]); DB::table('shirt')->insert([
                'name'=> 'Koszula fioletowa',
                'price'=>119.99,
                'image'=>'../img/koszula2.png',
                 'description'=>'Koszula z dekoldem w V.',
                 'product_type'=>'shirt',
            ]);
       DB::table('shirt')->insert([
            'name'=> ' Koszula Biała',
            'price'=>99.99,
            'image'=>'../img/koszula3.png',
             'description'=>'Koszula biała z guzikami.',
             'product_type'=>'shirt',
        ]);
        DB::table('shirt')->insert([
            'name'=> ' Koszula czerwona',
            'price'=>139.99,
            'image'=>'../img/koszula4.png',
             'description'=>'Koszula czerwona z guzikami  ',
             'product_type'=>'shirt',
        ]);   DB::table('shirt')->insert([
            'name'=> ' Koszula z wiązaniem',
            'price'=>129.99,
            'image'=>'../img/koszula5.png',
             'description'=>'Koszula z wiązaniem przy szyi. ',
             'product_type'=>'shirt',
        ]);   DB::table('shirt')->insert([
            'name'=> ' Koszula jeans',
            'price'=>39.99,
            'image'=>'../img/koszula6.png',
             'description'=>'Koszula jeans z guikami i kołnierzem.',
             'product_type'=>'shirt',
        ]);   DB::table('shirt')->insert([
            'name'=> ' Koszula w krate',
            'price'=>69.99,
            'image'=>'../img/koszula7.png',
             'description'=>'Koszula w Kratę mozliwość wiązania w pasie.',
             'product_type'=>'shirt',
        ]);   DB::table('shirt')->insert([
            'name'=> 'Koszula z nadrukiem ',
            'price'=>179.99,
            'image'=>'../img/koszula8.png',
             'description'=>'Koszula z nadrukiem oversize.',
             'product_type'=>'shirt',
        ]);
        //underwear
        DB::table('underwear')->insert([
            'name'=> 'Figi damskie ',
            'price'=>39.99,
            'image'=>'../img/bielizna1.png',
             'description'=>'zestaw pięć sztuk Fig damskih różne kolory',
             'product_type'=>'underwear',
        ]);
        DB::table('underwear')->insert([
            'name'=> 'zestaw Figi damskie ',
            'price'=>69.99,
            'image'=>'../img/bielizna2.png',
             'description'=>' Figi damskie dwa kolory',
             'product_type'=>'underwear',
        ]);
        DB::table('underwear')->insert([
            'name'=> ' Figi Białe',
            'price'=>39.99,
            'image'=>'../img/bielizna3.png',
             'description'=>'figi białe bezszwowe',
             'product_type'=>'underwear',
        ]);
        DB::table('underwear')->insert([
            'name'=> 'Biustonosz Biały ',
            'price'=>79.99,
            'image'=>'../img/bielizna4.png',
             'description'=>'Biustonosz biały koronkowe ramionczka rgulowane.',
             'product_type'=>'underwear',
        ]);
        DB::table('underwear')->insert([
            'name'=> 'Biustonosz niebieski ',
            'price'=>79.99,
            'image'=>'../img/bielizna5.png',
             'description'=>' Biustonosz z wycięciami, ramonczka regulowane.',
             'product_type'=>'underwear',
        ]);
        DB::table('underwear')->insert([
            'name'=> 'zestaw dwóch biustonoszy ',
            'price'=>99.99,
            'image'=>'../img/bielizna6.png',
             'description'=>' Zestaw dwóch biustonoszy, ramionczka koronkowe, regulowane.',
             'product_type'=>'underwear',
        ]);
        DB::table('underwear')->insert([
            'name'=> 'Figi koronkowe ',
            'price'=>59.99,
            'image'=>'../img/bielizna7.png',
             'description'=>'Figi koronkowe',
             'product_type'=>'underwear',
        ]);
        DB::table('underwear')->insert([
            'name'=> ' Zestaw trzech biustonoszy',
            'price'=>129.99,
            'image'=>'../img/bielizna8.png',
             'description'=>'Zestaw trzech biustonoszy regulowane ramionczka push-up.',
             'product_type'=>'underwear',
        ]);
        //socks
        DB::table('socks')->insert([
            'name'=> ' Skarpetki',
            'price'=>19.99,
            'image'=>'../img/skarpetki1.png',
             'description'=>'Skarpetki Białe z nadrukiem',
             'product_type'=>'socks',
        ]);
        DB::table('socks')->insert([
            'name'=> ' Skarpetki',
            'price'=>19.99,
            'image'=>'../img/skarpetki2.png',
             'description'=>'Skarpetki szare z nadrukiem',
             'product_type'=>'socks',
        ]);
        DB::table('socks')->insert([
            'name'=> ' Skarpetki',
            'price'=>19.99,
            'image'=>'../img/skarpetki3.png',
             'description'=>'Skarpetki Brązowe z nadrukiem.',
             'product_type'=>'socks',
        ]);
        DB::table('socks')->insert([
            'name'=> ' Skarpetki',
            'price'=>19.99,
            'image'=>'../img/skarpetki4.png',
             'description'=>'Skarpetki cienkie z serduszkami.',
             'product_type'=>'socks',
        ]);
        DB::table('socks')->insert([
            'name'=> ' Skarpetki',
            'price'=>19.99,
            'image'=>'../img/skarpetki5.png',
             'description'=>'Skarpetki Białe z misiami.',
             'product_type'=>'socks',
        ]);
        DB::table('socks')->insert([
            'name'=> ' Skarpetki',
            'price'=>19.99,
            'image'=>'../img/skarpetki6.png',
             'description'=>'Skarpetki Białe z nadrukiem',
             'product_type'=>'socks',
        ]);
        DB::table('socks')->insert([
            'name'=> ' Skarpetki',
            'price'=>19.99,
            'image'=>'../img/skarpetki7.png',
             'description'=>'Skarpetki czarne z kokardą styłu.',
             'product_type'=>'socks',
        ]);
        DB::table('socks')->insert([
            'name'=> ' Skarpetki',
            'price'=>19.99,
            'image'=>'../img/skarpetki8.png',
             'description'=>'Skarpetki Białe z nadrukiem',
             'product_type'=>'socks',
        ]);
        

    }
}
