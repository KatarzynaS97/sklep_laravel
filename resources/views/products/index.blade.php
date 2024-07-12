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

    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <p class="h1 text-center">{{ $category->name }}</p>
        </div>

        <div class="container">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($products as $product)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image -->
                            <img class="card-img-top" src="{{ asset($product->image_path) }}" alt="{{ $product->name }}" />

                            <!-- Product details -->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name -->
                                    <h5 class="fw-bolder">{{ $product->name }}</h5>
                                    <!-- Product price -->
                                    <p>Cena: {{ $product->price }}zł</p>
                                </div>
                            </div>

                            <!-- Product actions -->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn_koszyk fs-6 mt-auto" href="{{ route('product.show', $product->id) }}">Zobacz</a>
                                    <form action="{{ route('cart.add', ['category_id' => $product->category_id, 'id' => $product->id]) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="quantity" value="1">
                                        <button type="submit" class="btn btn-primary mt-2">Dodaj do koszyka</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
