@extends('layout.app')

@section('content')
    @if (session()->has('message'))
        <div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <div>{{ session()->get('message') }}</div>
        </div>
    @endif

    <!-- Header -->
    <header class="bg-dark py-5 container_slajd">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/sukienka2.png" class="d-block w-50" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/koszula1.png" class="d-block w-50" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/spodnie2.png" class="d-block w-50" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Cofnij</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Dalej</span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            @foreach ($categories as $category)
              
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @if (isset($randomProducts[$category->name]))
            @foreach ($randomProducts[$category->name] as $product)
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image -->
                                <img class="card-img-top" src="{{ asset($product->image_path) }}"
                                    alt="{{ $product->name }}">
                                <!-- Product details -->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name -->
                                        <h3>{{ $product->name }}</h3>
                                        <!-- Product price -->
                                        <p>Cena: {{ $product->price }}zł</p>
                                    </div>
                                </div>
                                <!-- Product actions -->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <a class="btn btn_koszyk fs-6 mt-auto" href="{{ route('product.show', $product->id) }}">Zobacz</a>
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @endif
                </div>
            @endforeach
        </div>
    </section>
@endsection
