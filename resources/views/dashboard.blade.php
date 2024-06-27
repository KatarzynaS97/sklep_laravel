@extends('layout.app')

@section('content')

@if(session()->has('message'))
    <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
            <use xlink:href="#check-circle-fill"/>
        </svg>
        <div>{{ session('message') }}</div>
    </div>
@endif
{{-- @extends('layout.app')

@section('content')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif --}}



<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <p class="text-center h1 text-muted m-md-5">Koszyk</p>
        <div class="row">
            @if(Auth::id())
                @foreach ($cartItems as $cartItem)
                    <div class="col-md-4 mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="{{ asset($cartItem->product->image) }}" alt="{{ $cartItem->product->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $cartItem->product->name }}</h5>
                                <p class="card-text">Cena: {{ $cartItem->price }}</p>
                                <p class="card-text">Ilość: {{ $cartItem->quantity }}</p>
                                <form action="{{ route('cart.update', ['productType' => $cartItem->product_type, 'id' => $cartItem->product_id]) }}" method="POST">
                                    @csrf
                                    <input type="number" name="quantity" value="{{ $cartItem->quantity }}" min="1" class="form-control" style="width: 100px;">
                                    <button type="submit" class="btn btn-primary mt-2">Aktualizuj</button>
                                </form>
                                <form action="{{ route('cart.remove', ['productType' => $cartItem->product_type, 'id' => $cartItem->product_id]) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger mt-2">Usuń</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                @foreach ($cartItems as $cartItem)
                    <div class="col-md-4 mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="{{ asset($cartItem['image']) }}" alt="{{ $cartItem['name'] }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $cartItem['name'] }}</h5>
                                <p class="card-text">Cena: {{ $cartItem['price'] }}</p>
                                <p class="card-text">Ilość: {{ $cartItem['quantity'] }}</p>
                                <form action="{{ route('cart.update', ['productType' => $cartItem['product_type'], 'id' => $cartItem['product_id']]) }}" method="POST">
                                    @csrf
                                    <input type="number" name="quantity" value="{{ $cartItem['quantity'] }}" min="1" class="form-control" style="width: 100px;">
                                    <button type="submit" class="btn btn-primary mt-2">Aktualizuj</button>
                                </form>
                                <form action="{{ route('cart.remove', ['productType' => $cartItem['product_type'], 'id' => $cartItem['product_id']]) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger mt-2">Usuń</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
@endsection