@extends('layout.app')

@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Twój Profil</div>
                <div class="card-body">
                    <h5>Witaj, {{ Auth::user()->name }}!</h5>
                    <p>Twój profil</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Twój Koszyk</div>
                <div class="card-body">
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    @if(count($cartItems) > 0)
                        <h5 class="mb-4">Ilość Produktów: {{ count($cartItems) }}</h5>

                        @foreach ($cartItems as $cartItem)
                            <div class="row mb-3">
                                <div class="col-3">
                                    <img src="{{ asset($cartItem->product->image_path) }}" class="img-fluid rounded" alt="{{ $cartItem->product->name }}">
                                </div>
                                <div class="col-6">
                                    <h6>{{ $cartItem->product->name }}</h6>
                                    <p>Cena: {{ $cartItem->price }} zł</p>
                                </div>
                                <div class="col-3">
                                    <form action="{{ route('cart.remove', ['productType' => $cartItem->category_id, 'id' => $cartItem->product_id]) }}" method="POST">

                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        @endforeach

                        <div class="text-end">
                            <h5>Suma: {{ $totalAmount }} zł</h5>
                            <a href="{{ route('cart.index') }}" class="btn btn-primary">Zobacz koszyk</a>
                        </div>
                    @else
                        <p>Twój koszyk jest pusty.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
