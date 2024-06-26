


@extends('layout.app')

@section('content')
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <p class=" text-center  h1 text-muted m-md-5">T-shirt</p>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    
                    <a href="{{ url('/product17_tshirt/1') }}"> <img class="card-img-top" src="{{ asset('img/bluzka1.png') }}"
                        alt="sukienka wiosenna " /></a>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Bluzka  biała</h5>
                            <!-- Product price-->
                           120zł
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn_koszyk fs-6 mt-auto" href="#">Dodaj do koszyka</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                   
                    <!-- Product image-->
                    <a href="{{ url('/product18_tshirt/2') }}"> <img class="card-img-top" src="{{ asset('img/bluzka2.png') }}"
                        alt="Koszulka czerwona" /></a>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Koszulka czerwona</h5>
                          
                            
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn_koszyk fs-6  mt-auto" href="#">Dodaj do koszyka</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                   
                    <!-- Product image-->
                    <a href="{{ url('/product19_tshirt/3') }}">  <img class="card-img-top" src="{{ asset('img/bluzka3.png') }}"
                        alt="Zestaw trzech koszulek" /></a>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Zestaw trzech koszulek</h5>
                            <!-- Product price-->
                            <span class="text-muted text-decoration-line-through"></span>
                            
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn_koszyk fs-6  mt-auto" href="#">
                            Dodaj do koszyka</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <a href="{{ url('/product20_tshirt/4') }}">  <img class="card-img-top" src="{{ asset('img/bluzka4.png') }}"
                        alt="Koszulka z napisem " /></a>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Koszulka z napisem</h5>
                           </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn_koszyk fs-6  mt-auto" href="#">Dodaj do koszyka</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                   
                    <!-- Product image-->
                    <a href="{{ url('/product21_tshirt/5') }}">  <img class="card-img-top" src="{{ asset('img/bluzka5.png') }}"
                        alt="Bluzka czarna" /></a>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Bluzka czarna</h5>
                           
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn_koszyk fs-6  mt-auto" href="#">Dodaj do koszyka</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <a href="{{ url('/product22_tshirt/6') }}">  <img class="card-img-top" src="{{ asset('img/bluzka6.png') }}"
                        alt="koszulaka szara" /></a>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Koszulka szara z nadrukiem</h5>
                        
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn_koszyk fs-6 mt-auto" href="#">Dodaj do koszyka</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    
                    <!-- Product image-->
                    <a href="{{ url('/product23_tshirt/7') }}"> <img class="card-img-top" src="{{ asset('img/bluzka7.png') }}"
                        alt="bluzka w paski" /></a>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Bluzka w paski</h5>
                           
                           
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn_koszyk fs-6  mt-auto" href="#">Dodaj do koszyka</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <a href="{{ url('/product23_1tshirt/8') }}"> <img class="card-img-top" src="{{ asset('img/bluzka8.png') }}"
                        alt="koszulka zielona" /></a>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Koszulka zielona</h5>
                        </div>
                    </div>
                         
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn_koszyk fs-6  mt-auto" href="#">Dodaj do koszyka</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection