@extends('layout.app')

@section('content')
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <p class=" text-center  h1 text-muted m-md-5">Spodnie</p>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    
                    <a href="{{ url('/product9_spodnie/1') }}"><img class="card-img-top" src="{{ asset('img/spodnie1.png') }}"
                        alt="jeansy" /></a>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Spodnie jeansy</h5>
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
                   <a href="{{ url('/product10_spodnie/2') }}"> <img class="card-img-top" src="{{ asset('img/spodnie2.png') }}"
                        alt="..." /></a>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Spodnie sportowe</h5>
                          
                            
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
                   <a href="{{ url('/product11_spodnie/3') }}"> <img class="card-img-top" src="{{ asset('img/spodnie3.png') }}"
                        alt="..." /></a>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Spodnie eleganckie</h5>
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
                    <a href="{{ url('/product12_spodnie/4') }}"><img class="card-img-top" src="{{ asset('img/spodnie4.png') }}"
                        alt="spodnie skórzane" /></a>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Spodnie skórzane</h5>
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
                    <a href="{{ url('/product13_spodnie/5') }}"><img class="card-img-top" src="{{ asset('img/spodnie5.png') }}"
                        alt="..." /></a>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Spodnie ze ściągaczami</h5>
                           
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
                    <a href="{{ url('/product14_spodnie/6') }}"><img class="card-img-top" src="{{ asset('img/spodnie6.png') }}"
                        alt="..." /></a>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Spodnie dresowe szerokie</h5>
                        
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
                    <a href="{{ url('/product15_spodnie/7') }}"><img class="card-img-top" src="{{ asset('img/spodnie7.png') }}"
                        alt="..." /></a>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Spodnie jeansy z dziurami</h5>
                           
                           
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
                    <a href="{{ url('/product16_spodnie/8') }}"><img class="card-img-top" src="{{ asset('img/spodnie8.png') }}"
                        alt="..." /></a>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Spodnie boyfriend</h5>
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
