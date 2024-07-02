@extends('layout.app2')

@section('content')
@if(session()->has('message'))
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </symbol>
    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
    </symbol>
    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </symbol>
  </svg>
<div class="alert alert-success d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
    </div>

{{-- <div class="alert alert-success">
    <button type="button" class="close" data-dismiss= "alert">x</button> --}}
    {{session()->get('message')}}
</div>
@endif
    <section class="py-5  ">

        <div class="container px-4 px-lg-5 mt-5 ">
            <p class=" h1 text-center tytul_produkt">{{$product->name}}</p>
        </div>
        <div class="container_product m-4">
        <div class="gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center  ">
            <div class=" col mb-5 produkt1 ">
                <div class=" card h-100 mr-5 mt-4">
                    <!-- Product image-->
                    <img class="card-img-top mt-6 " src=src={{$product->image}} alt={{$product->name}}  />
                </div>
            </div>
        </div>
        <div class="description_product mt-5 "> 
            <div class="">
                {{-- price --}}
                <h2> {{$product->price}}zł</h2>
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
            <form action="{{ route('cart.add', ['productType' =>$product->product_type, 'id' => $product->id]) }}" method="POST">                @csrf
                <input type="hidden" name="name" value="{{ $product->name }}">
                <input type="number" value="1" min="1" class="form-control" style="width:100px" name="quantity">
            <br>
            <button type="submit" class="btn btn_koszyk">Dodaj do koszyka</button>
            </form>
            <div class="d-block m-3">
                <p>Opis produktu </p>
                <p> {{$product->description}}</p>
                <h6>Kolor: </h6>
                <p> Biały, Szary, Brązowy</p>
                <h6>Materiał:</h6>
                <p>Bawełna</p>
                <h6>Sezon:</h6>
                <p>Całoroczne</p>
            <div class="info_skw"> 
                <h6 class="opis_h1_p">Kod produktu:</h6>
                <p class="opis_h1_p"> 24588768</p>
              
            </div>
                <br>{{-- <h5 class="opis_h1_p">Modelka ma na sobie rozmiar S</h5> --}}
            </div>
            <div class="info_rzw">
                
                <h6  class="fs-4"><a href="{{ url('/size_tables') }}" class="  text-decoration-none text-dark icon-link icon-link-hover">Tabela rozmiarów</a></h6>
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
