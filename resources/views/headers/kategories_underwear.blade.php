

@extends('layout.app')

@section('content')
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <p class=" text-center  h1 text-muted m-md-5">Bielizna</p>

        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    
                    <a href="{{ url('/product32_bielizna/1') }}"> <img class="card-img-top" src="{{ asset('img/bielizna1.png') }}"
                        alt="majtki " /></a>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Figi damskie</h5>
                            <!-- Product price-->
                           120zł
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
                    <a href="{{ url('/product33_bielizna/2') }}"><img class="card-img-top" src="{{ asset('img/bielizna2.png') }}"
                        alt="figi" /></a>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Figi</h5>
                          
                            
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
                    <a href="{{ url('/product33_bielizna/3') }}"><img class="card-img-top" src="{{ asset('img/bielizna3.png') }}"
                        alt="figi białe" /></a>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Figi białe</h5>
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
                    <a href="{{ url('/product34_bielizna/4') }}"> <img class="card-img-top" src="{{ asset('img/bielizna4.png') }}"
                        alt="biustonosz biały " /></a>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Biustonosz biały</h5>
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
                    <a href="{{ url('/product35_bielizna/5') }}"><img class="card-img-top" src="{{ asset('img/bielizna5.png') }}"
                        alt="biustonosz" /></a>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Biustonosz niebieski</h5>
                           
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
                    <a href="{{ url('/product36_bielizna/6') }}"><img class="card-img-top" src="{{ asset('img/bielizna6.png') }}"
                        alt="zestaw skarpetek" /></a>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Zestaw biustonoszy</h5>
                        
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
                    <a href="{{ url('/product37_bielizna/7') }}"><img class="card-img-top" src="{{ asset('img/bielizna7.png') }}"
                        alt="..." /></a>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Figi koronkowe</h5>
                           
                           
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
                    <a href="{{ url('/product38_bielizna/8') }}"><img class="card-img-top" src="{{ asset('img/bielizna8.png') }}"
                        alt="..." /></a>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Zestaw trzech biustonoszy</h5>
                        </div>
                    </div>
                         
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn_koszyk fs-6 mt-auto" href="#">Dodaj do koszyka</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection