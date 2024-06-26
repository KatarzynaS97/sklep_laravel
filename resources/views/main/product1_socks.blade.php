@extends('layout.app2')

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
                    <img class="card-img-top " src={{$product->image}}  alt={{$product->name}}/>
                </div>
            </div>
        </div>
        <div class="description_product mt-5 ">
            <div class="">
                {{-- price --}}
                <h2>{{$product->price}}zł</h2>
                <!-- Product actions-->


            </div>
            <h3>Rozmiar uniwersalny</h3>
           
            <div>
                <a class="btn btn_koszyk" href="#" role="button">Dodaj do koszyka</a>
            </div>
            <div class="d-block m-3">
                <p>Opis produktu </p>
                <p> {{$product->description}}</p>
                <h6>Kolor: </h6>
                <p>Biel</p>
                <h6>Materiał:</h6>
                <p>Bawełna</p>
            
            <div class="info_skw"> 
                <h6 class="opis_h1_p">Skład:</h6>
                <p class="opis_h1_p">100% Wiskoza</p>
                <h6 class="opis_h1_p">Kod produktu:</h6>
                <p class="opis_h1_p"> 17668</p>
         
            <div class="info_rzw">
                
                {{-- <h6  class="fs-4"><a href="{{ url('/size_tables') }}" class="  text-decoration-none text-dark icon-link icon-link-hover">Tabela rozmiarów</a></h6> --}}
                <hr width="350px">
                <h6  class="fs-4"><a href=" {{ url('/shopping_prices') }}" class="text-decoration-none text-dark">Przesyłka i płatność</a></h6>
                <ul  class="fs-4">
                    <li class="li_color" >Wysyłka w <b class="li_color_product ">48h </b></li>
                    <li class="li_color">Kup do 13 a paczkę otrzymasz jutro </li>
                </ul>
                <hr width="350px">
                <h6  class="fs-4"><a href="{{ url('/exchange') }}" class="text-decoration-none text-dark" >Polityka wymiany i zwrotów</a></h6>
                <ul class="fs-4"><li class="li_color  " >Bezpłatna wymiana na inny rozmiar</li></ul>
                <hr width="350px">
            </div>
        </div>
    </div>
        </div>
    @endsection
