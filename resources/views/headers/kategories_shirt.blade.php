@extends('layout.app')

@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <p class=" text-center  h1 text-muted m-md-5">Koszule</p>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->

                        <a href="{{ url('/product24_shirt/1') }}"> <img class="card-img-top"
                                src="{{ asset('img/koszula1.png') }}" alt="sukienka wiosenna " /></a>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Koszula biała oversize</h5>
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
                        <a href="{{ url('/product25_shirt/2') }}"> <img class="card-img-top"
                                src="{{ asset('img/koszula2.png') }}" alt="..." /></a>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Koszula fioletowa</h5>


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
                        <a href="{{ url('/product26_shirt/3') }}"><img class="card-img-top"
                                src="{{ asset('img/koszula3.png') }}" alt="..." /></a>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Koszula biała</h5>
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
                        <a href="{{ url('/product27_shirt/4') }}"><img class="card-img-top"
                                src="{{ asset('img/koszula4.png') }}" alt="koszula czerwona" /></a>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Koszula czerwona</h5>
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
                        <a href="{{ url('/product28_shirt/5') }}"><img class="card-img-top"
                                src="{{ asset('img/koszula5.png') }}" alt="Koszula z wiązaniem" /></a>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Koszula z wiązaniem</h5>

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
                        <a href="{{ url('/product29_shirt/6') }}"> <img class="card-img-top"
                                src="{{ asset('img/koszula6.png') }}" alt="koszula jeans" /></a>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Koszula jeans</h5>

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
                        <a href="{{ url('/product30_shirt/7') }}"><img class="card-img-top"
                                src="{{ asset('img/koszula7.png') }}" alt="koszula w krate" /></a>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Koszula w krate</h5>


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
                        <a href="{{ url('/product31_shirt/8') }}"><img class="card-img-top"
                                src="{{ asset('img/koszula8.png') }}" alt="koszula z nadrukiem" /></a>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Koszula z nadrukiem</h5>
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
