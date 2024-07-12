<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use App\Models\Product;



class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */  public function run(): void
    {
      $categories = DB::table('categories')->pluck('id', 'slug')->toArray();
        $products = [
            ['name'=> 'Sukienka wiosenna',
            'price'=>120,
           'image' => 'img/sukienka2.png',
            'description'=>' Sukienka , na ramionczkach . Model zwiewny, przedłużany z tyłu. Dekolt głęboki, w pasie elastyczna
                    gumka. W zestawie wiązany pasek z dopasowanego materiału. Wykonana z przewiewnej wiskozy. Ozdobiona
                    printem kawiatowym. Gumka w pasie rozciąga się do: S = 88 cm, M = 91 cm. Sukienka będzie doskonała na
                    codzienne wyjścia.',
                    'category_id'=>$categories['dress']],

                ['name'=> 'Sukienka wiosenna',
                'price'=>150,
                'image' => 'img/sukienka6.png',
                 'description'=>'Sukienka krótki rękaw. Model zwiewny, długość MAXI  . Dekolt V w pasie elastyczna
                        gumka.  Wykonana z przewiewnej wiskozy. Ozdobiona
                        printem kawiatowym. Gumka w pasie rozciąga się do: S = 88 cm, M = 91 cm. Sukienka będzie doskonała na
                        codzienne wyjścia.',
                        'category_id'=>$categories['dress']],

                       
                ['name'=> 'Sukienka wiosenna Maxi',
                'price'=>350,
                'image'=>'img/sukienka4.png',
                 'description'=>'Biała elegancka wygodna sukienka. Krótki rękaw z falbanką. Model zwiewny, długość MAXI. Dekolt V w pasie 
                       pasek wiązany do tyłu. Wykonana z przewiewnej wiskozy. Sukienka będzie doskonała na
                        służbowe i prywatne wyjścia.',
                        'category_id'=>$categories['dress']],
            
               [ 'name'=> 'Sukienka wiosenna Maxi',
               'price'=>250,
                'image'=>'img/sukienka5.png',
                 'description'=>'Sukienka dopadowana, długość MINI, wyciecie w talii. Jeden rękaw z ozdobą z piórek w kolorze rózowym, drugie ramie odkryte. Wykonana z dopadowanego materiuału. Ozdobiona mieniącymi się diamencikami
                Sukienka będzie doskonała na imprezy okolicznościowe ale także na codzienne wyjścia.',
                'category_id'=>$categories['dress']],

        
           
               [ 'name'=> 'Sukienka na wesele',
                'price'=>230,
                'image'=>'../img/sukienka3.png',
                 'description'=>' Sukienka idealna na wesele lub inna impreze okolicznościową , długość przed kolano wyciecie w talii. Na ramionczkach, dekold koronkowy.Od pasa w dół tiul.',
                 'category_id'=>$categories['dress']],

           
                ['name'=> 'Sukienka letnia',
               'price'=>280,
                'image'=>'img/sukienka7.png',
                 'description'=>' Sukienka letnia wzór kwiatowy ,  wyciecie w talii. Dłuższy tył sukienki, na ramiączkach. Dekold w literkę V . Delikatne wycięcie na plecach. Ozdobiona printem kwiatowym. 
                Sukienka będzie doskonała na imprezy okolicznościowe ale także na codzienne wyjścia. ',
                'category_id'=>$categories['dress']],

          
                ['name'=> 'Sukienka wieczorowa',
               'price'=>180,
                'image'=>'img/sukienka8.png',
                 'description'=>'Sukienka wieczorowa, długość MAXI z wycięciem na nogę. Dekold w literkę V, plecy odkryte. Ozdobiona brokatem. 
                Sukienka będzie doskonała na imprezy okolicznościowe. ',
                'category_id'=>$categories['dress']],
               
               ['name'=> 'Sukienka Maxi',
                'price'=>280,
               'image' => 'img/sukienka9.png',
                'description'=>' Sukienka długa na ciękich ramionczkach, dekold kopertowy.  Model zwiewny, długość MAXI , wiązanie w pasie. Wykonana z przewiewnej wiskozy.  Sukienka będzie doskonała na imprezy okolicznościowe. ',
               'category_id'=>$categories['dress']],
                    
                ['name'=> 'Spodnie Jeansy',
               'price'=>89.99,
                'image'=>'img/spodnie1.png',
                 'description'=>'Jasnoniebieskie Jeansy Skinny z Przetarciami i Dziurami Honnaira.',
                'category_id'=>$categories['trousers']],

                ['name'=> 'Spodnie sportowe',
               'price'=>129.99,
                'image'=>'img/spodnie2.png',
                 'description'=>'Spodnie sportowe z bawełną. Nogawki ze ściągaczami.',
                 'category_id'=>$categories['trousers']],


        
                ['name'=> 'Spodnie Eleganckie',
               'price'=>99.99,
                'image'=>'img/spodnie3.png',
                 'description'=>'Spodnie eleganckie idealne na biznesowe spotkania jak i na codzień.',
                 'category_id'=>$categories['trousers']],

            
            
                ['name'=> 'Spodnie skórzane',
               'price'=>119.99,
                'image'=>'img/spodnie4.png',
                 'description'=>'Spodnie eleganckie z wysokim stanem. Sprawdzą się idealnie na wyjścia biznesowe ale także na codzień.',
                 'category_id'=>$categories['trousers']],


            
          
                ['name'=> 'Spodnie ze  ściągaczami',
               'price'=>99.99,
                'image'=>'img/spodnie5.png',
                 'description'=>'Spodnie eleganckie z wysokim stanem. Sprawdzą się idealnie na wyjścia biznesowe ale także na codzień.',
                 'category_id'=>$categories['trousers']],


                ['name'=> 'Spodnie dresowe',
               'price'=>199.99,
                'image'=>'img/spodnie6.png',
                 'description'=>'Spodnie dresowe z szerokimi nogawkami i kieszeniami.',
                 'category_id'=>$categories['trousers']],


                ['name'=> 'Jeansy z dziurami i przetarciami',
               'price'=>199.99,
                'image'=>'img/spodnie7.png',
                 'description'=>'Spodnie jeansy wysoki stan z dziurami i przetarciamy.',
                 'category_id'=>$categories['trousers']],

                 
           
                ['name'=> 'Jeansy Boyfriend',
               'price'=>299.99,
                'image'=>'img/spodnie8.png',
                 'description'=>'Spodnie jeansy boyfriend, wysoki stan. ',
                 'category_id'=>$categories['trousers']],

         
                ['name'=> 'Biała Bluzka',
               'price'=>99.99,
                'image'=>'img/bluzka1.png',
                 'description'=>'Koszulka Biała , krótki rękaw. ',
                 'category_id'=>$categories['tshirt']],

          
               [ 'name'=> 'Czerwona Bluzka',
               'price'=>99.99,
                'image'=>'img/bluzka2.png',
                 'description'=>'Koszulka Czerwona , krótki rękaw. ',
                 'category_id'=>$categories['tshirt']],


          
              [  'name'=> 'Zestaw trzech koszulek',
               'price'=>119.99,
                'image'=>'img/bluzka3.png',
                 'description'=>'Zestaw trzech koszulek krótki rękaw trzy kolory ',
                 'category_id'=>$categories['tshirt']],

        
                ['name'=> 'Biała koszulka z nadrukiem',
               'price'=>129.99,
                'image'=>'img/bluzka4.png',
                 'description'=>'Biała koszulka z nadrukiem na zółtym tle. ',
                 'category_id'=>$categories['tshirt']],


                ['name'=> 'Bluzka sportowa',
               'price'=>89.99,
                'image'=>'img/bluzka5.png',
                 'description'=>'Bluzka sportowa idealna na trening. ',
                 'category_id'=>$categories['tshirt']],

    
               [ 'name'=> 'Koszulka Szara',
               'price'=>79.99,
                'image'=>'img/bluzka6.png',
                 'description'=>'Koszulka Szara z nadrukiem. ',
                 'category_id'=>$categories['tshirt']],

               [ 'name'=> 'Koszulka zielona',
               'price'=>99.99,
                'image'=>'img/bluzka8.png',
                 'description'=>'Koszulka zielona z wycięciem  ',
                 'category_id'=>$categories['tshirt']],

                 
                ['name'=> ' Bluzka w paski',
               'price'=>139.99,
                'image'=>'img/bluzka7.png',
                 'description'=>'Koszulka w paski z naszywką',
                 'category_id'=>$categories['tshirt']],


                ['name'=> ' Koszula biała oversize',
               'price'=>119.99,
                'image'=>'img/koszula1.png',
                 'description'=>'Koszula oversize z guzikami idealna na wyjścia biznesowe i na codzień ',
                 'category_id'=>$categories['shirt']],


                ['name'=> 'Koszula fioletowa',
               'price'=>119.99,
                'image'=>'img/koszula2.png',
                 'description'=>'Koszula z dekoldem w V.',
                 'category_id'=>$categories['shirt']],

     
           [ 'name'=> ' Koszula Biała',
               'price'=>99.99,
            'image'=>'img/koszula3.png',
             'description'=>'Koszula biała z guzikami.',
             'category_id'=>$categories['shirt']],

    
            ['name'=> ' Koszula czerwona',
               'price'=>139.99,
            'image'=>'img/koszula4.png',
             'description'=>'Koszula czerwona z guzikami  ',
             'category_id'=>$categories['shirt']],

            ['name'=> ' Koszula z wiązaniem',
               'price'=>129.99,
            'image'=>'img/koszula5.png',
             'description'=>'Koszula z wiązaniem przy szyi. ',
             'category_id'=>$categories['shirt']],


            ['name'=> ' Koszula jeans',
               'price'=>39.99,
            'image'=>'img/koszula6.png',
             'description'=>'Koszula jeans z guikami i kołnierzem.',
             'category_id'=>$categories['shirt']],
             

            ['name'=> ' Koszula w krate',
               'price'=>69.99,
            'image'=>'img/koszula7.png',
             'description'=>'Koszula w Kratę mozliwość wiązania w pasie.',
             'category_id'=>$categories['shirt']],


           [ 'name'=> 'Koszula z nadrukiem ',
               'price'=>179.99,
            'image'=>'img/koszula8.png',
             'description'=>'Koszula z nadrukiem oversize.',
             'category_id'=>$categories['shirt']],


            ['name'=> 'Figi damskie ',
               'price'=>39.99,
            'image'=>'img/bielizna1.png',
             'description'=>'zestaw pięć sztuk Fig damskih różne kolory',
             'category_id'=>$categories['underwear']],


           [ 'name'=> 'zestaw Figi damskie ',
               'price'=>69.99,
            'image'=>'img/bielizna2.png',
             'description'=>' Figi damskie dwa kolory',
             'category_id'=>$categories['underwear']],


           [ 'name'=> ' Figi Białe',
               'price'=>39.99,
            'image'=>'img/bielizna3.png',
             'description'=>'figi białe bezszwowe',
             'category_id'=>$categories['underwear']],


            ['name'=> 'Biustonosz Biały ',
               'price'=>79.99,
            'image'=>'img/bielizna4.png',
             'description'=>'Biustonosz biały koronkowe ramionczka rgulowane.',
             'category_id'=>$categories['underwear']],


            ['name'=> 'Biustonosz niebieski ',
               'price'=>79.99,
            'image'=>'img/bielizna5.png',
             'description'=>' Biustonosz z wycięciami, ramonczka regulowane.',
             'category_id'=>$categories['underwear']],


           [ 'name'=> 'zestaw dwóch biustonoszy ',
               'price'=>99.99,
            'image'=>'img/bielizna6.png',
             'description'=>' Zestaw dwóch biustonoszy, ramionczka koronkowe, regulowane.',
             'category_id'=>$categories['underwear']],


           [ 'name'=> 'Figi koronkowe ',
               'price'=>59.99,
            'image'=>'img/bielizna7.png',
             'description'=>'Figi koronkowe',
             'category_id'=>$categories['underwear']],

            ['name'=> 'Zestaw trzech biustonoszy',
               'price'=>129.99,
            'image'=>'img/bielizna8.png',
             'description'=>'Zestaw trzech biustonoszy regulowane ramionczka push-up.',
             'category_id'=>$categories['underwear']],

            ['name'=> 'Skarpetki',
               'price'=>19.99,
            'image'=>'img/skarpetki1.png',
             'description'=>'Skarpetki Białe z nadrukiem',
             'category_id'=>$categories['socks']],


            ['name'=> 'Skarpetki',
               'price'=>19.99,
            'image'=>'img/skarpetki2.png',
             'description'=>'Skarpetki szare z nadrukiem',
             'category_id'=>$categories['socks']],


            ['name'=> 'Skarpetki',
               'price'=>19.99,
            'image'=>'img/skarpetki3.png',
             'description'=>'Skarpetki Brązowe z nadrukiem.',
             'category_id'=>$categories['socks']],


            ['name'=> 'Skarpetki',
               'price'=>19.99,
            'image'=>'img/skarpetki4.png',
             'description'=>'Skarpetki cienkie z serduszkami.',
             'category_id'=>$categories['socks']],

            ['name'=> 'Skarpetki',
               'price'=>19.99,
            'image'=>'img/skarpetki5.png',
             'description'=>'Skarpetki Białe z misiami.',
             'category_id'=>$categories['socks']],


            ['name'=> 'Skarpetki',
               'price'=>19.99,
            'image'=>'img/skarpetki6.png',
             'description'=>'Skarpetki Białe z nadrukiem',
             'category_id'=>$categories['socks']],


           [ 'name'=> 'Skarpetki',
               'price'=>19.99,
            'image'=>'img/skarpetki7.png',
             'description'=>'Skarpetki czarne z kokardą styłu.',
             'category_id'=>$categories['socks']],


            ['name'=> 'Skarpetki',
               'price'=>19.99,
            'image'=>'img/skarpetki8.png',
             'description'=>'Skarpetki Białe z nadrukiem',
             
             'category_id'=>$categories['socks']],

];

foreach ($products as $data) {
   $slug = Str::slug($data['name']);
   $originalSlug = $slug;
   $count = 1;
   while (DB::table('products')->where('slug', $slug)->exists()) {
      $slug = $originalSlug . '-' . $count++;
  }
   try {
       Product::create([
           'name' => $data['name'],
           'slug' => $slug,
           'price' => $data['price'],
           'image_path' => $data['image'],
           'description' => $data['description'],
           'category_id' => $data['category_id']
       ]);
   } catch (\PDOException $e) {
       Log::error('PDOException: ' . $e->getMessage());
   }
}


}


}