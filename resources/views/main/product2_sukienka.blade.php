@extends('layout.app_product')

@section('content')
    <section class="py-5  ">

        <div class="container px-4 px-lg-5 mt-5 ">
            <p class=" h1 text-center tytul_produkt">{{$product->name}}</p>
        </div>
        <div class="container_product m-4">
        <div class="gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center  ">
            <div class=" col mb-5 produkt1 ">
                <div class=" card h-100 mr-5 mt-4">
                    <!-- Product image-->
                    <img class="card-img-top " src={{$product->image}}  alt={{$product->name}}  />
                </div>
            </div>
        </div>
        <div class="description_product mt-5 ">
            <div class="">
                {{-- price --}}
                <h2>{{$product->price}}zł</h2>
                <!-- Product actions-->


            </div>
            <p>Dostępne rozmiary</p>
            <div class="btn-group " role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                <label class="btn btn-outline-dark" for="btnradio1">S</label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                <label class="btn btn-outline-dark" for="btnradio2"> M </label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                <label class="btn btn-outline-dark" for="btnradio3">L</label>
            </div>
            {{-- <div>
                <a cl
   
           
            <div> --}}
                <a class="btn btn_koszyk" href="#" role="button">Dodaj do koszyka</a>
            </div>
            <div class="d-block m-3">
                <p>Opis produktu </p>
                <p> {{$product->description}}</p>
                <h6>Kolor: </h6>
                <p> Róż</p>
                <h6>Materiał:</h6>
                <p>Tkanina</p>
                <h6>Sezon:</h6>
                <p>Wiosna / Lato</p>
            <div class="info_skw"> 
                <h6 class="opis_h1_p">Skład:</h6>
                <p class="opis_h1_p">100% Wiskoza</p>
                <h6 class="opis_h1_p">Kod produktu:</h6>
                <p class="opis_h1_p"> 285468</p>
                <h6 class="opis_h1_p"> Wzrost modelki:</h6>
                <p class="opis_h1_p">170 cm</p>
            </div>
                <h5 class="opis_h1_p">Modelka ma na sobie rozmiar S</h5>
            </div>
          
        </div>
    </div>
        </div>
    @endsection
