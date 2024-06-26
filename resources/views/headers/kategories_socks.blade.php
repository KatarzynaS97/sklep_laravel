@extends('layout.app')

@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <p class=" text-center  h1 text-muted m-md-5">Skarpetki</p>

            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->

                        <a href="{{ url('/product1_socks/1') }}"><img class="card-img-top"
                                src="{{ asset('img/skarpetki1.png') }}" alt="skarpetki " /></a>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Skarpetki</h5>
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
                        <a href="{{ url('/product2_socks/2') }}"><img class="card-img-top"
                                src="{{ asset('img/skarpetki2.png') }}" alt="skarpetki" /></a>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Skarpetki</h5>


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
                        <a href="{{ url('/product3_socks/3') }}"><img class="card-img-top"
                                src="{{ asset('img/skarpetki3.png') }}" alt="skarpetki" /></a>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Skarpetki</h5>
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
                        <a href="{{ url('/product4_socks/4') }}"><img class="card-img-top"
                                src="{{ asset('img/skarpetki4.png') }}" alt="skarpetki " /></a>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Skarpetki</h5>
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
                        <a href="{{ url('/product5_socks/5') }}"><img class="card-img-top"
                                src="{{ asset('img/skarpetki5.png') }}" alt="skarpetki" /></a>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Skarpetki</h5>

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
                        <a href="{{ url('/product6_socks/6') }}"><img class="card-img-top"
                                src="{{ asset('img/skarpetki6.png') }}" alt="skarpetki" /></a>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Skarpetki</h5>

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
                        <a href="{{ url('/product7_socks/7') }}"> <img class="card-img-top"
                                src="{{ asset('img/skarpetki7.png') }}" alt="Skarpetki" /></a>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Skarpetki</h5>


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
                        <a href="{{ url('/product8_socks/8') }}"> <img class="card-img-top"
                                src="{{ asset('img/skarpetki8.png') }}" alt="Skarpetki" /></a>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Skarpetki</h5>
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
