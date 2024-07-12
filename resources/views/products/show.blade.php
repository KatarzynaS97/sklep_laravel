@extends('layout.app')

@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6">
                    <img class="card-img-top mb-5 mb-md-0" src="{{ asset($product->image_path) }}" alt="{{ $product->name }}">
                </div>
                <div class="col-md-6">
                    <h1 class="display-5 fw-bolder">{{ $product->name }}</h1>
                    <div class="fs-5 mb-5">
                        <span>{{ $product->price }}zł</span>
                    </div>
                    <p class="lead">{{ $product->description }}</p>
                    <div class="d-flex">
                        <form action="{{ route('cart.add', ['category_id' => $product->category_id, 'id' => $product->id]) }}" method="POST">
                        @csrf
                            <input type="hidden" name="name" value="{{ $product->name }}">
                            <input type="number" value="1" min="1" class="form-control" style="width:100px" name="quantity">
                            <br>
                            <button type="submit" class="btn btn_koszyk">Dodaj do koszyka</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
