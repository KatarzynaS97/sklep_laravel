@extends('layout.app')

@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <p class=" text-center  h1 text-muted m-md-5">Sukienki</p>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                      
                        <a href="{{ route('main.product', ['product_type' => 'product1', 'category' => 'sukienka', 'id' => 1]) }}"><img class="card-img-top"
                                src="{{ asset('img/sukienka2.png') }}" alt="sukienka wiosenna " /></a>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Sukienka wiosenna</h5>
                                <!-- Product price-->
                                120zł
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn_koszyk fs-6  mt-auto" href="#">Dodaj do
                                    koszyka</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <!-- Product image-->
                        <a href="{{ url('/product2_sukienka/2') }}"><img class="card-img-top"
                                src="{{ asset('img/sukienka6.png') }}" alt="..." /></a>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Sukienka wiosenna</h5>


                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn_koszyk fs-6  mt-auto" href="#">Dodaj do
                                    koszyka</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <!-- Product image-->
                        <a href="{{ url('/product3_sukienka/3') }}"> <img class="card-img-top"
                                src="{{ asset('img/sukienka4.png') }}" alt="sukienka elegancka" /></a>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Sukienka elegancka</h5>
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
                        <a href="{{ url('/product4_sukienka/4') }}"><img class="card-img-top"
                                src="{{ asset('img/sukienka5.png') }}" alt="dopasowana" /></a>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Sukienka dopasowana</h5>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn_koszyk fs-6  mt-auto" href="#">Dodaj do
                                    koszyka</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <!-- Product image-->
                        <a href="{{ url('/product5_sukienka/5') }}"><img class="card-img-top"
                                src="{{ asset('img/sukienka3.png') }}" alt="sukienk weselna" /></a>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Sukienka na wesele</h5>

                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn_koszyk fs-6  mt-auto" href="#">Dodaj do
                                    koszyka</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <a href="{{ url('/product6_sukienka/6') }}"><img class="card-img-top"
                                src="{{ asset('img/sukienka7.png') }}" alt="sukienka letnia" /></a>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Sukienka letnia</h5>

                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn_koszyk fs-6 mt-auto" href="#">Dodaj do
                                    koszyka</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <!-- Product image-->
                        <a href="{{ url('/product7_sukienka/7') }}"><img class="card-img-top"
                                src="{{ asset('img/sukienka8.png') }}" alt="sukienka wieczorowa" /></a>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Sukienka wieczorowa</h5>


                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn_koszyk fs-6 mt-auto" href="#">Dodaj do
                                    koszyka</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <a href="{{ url('/product8_sukienka/8') }}"><img class="card-img-top"
                                src="{{ asset('img/sukienka9.png') }}" alt="sukienka długa" /></a>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Sukienka długa</h5>
                            </div>
                        </div>

                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn_koszyk fs-6  mt-auto" href="#">Dodaj do
                                    koszyka</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
