@extends('layout.app')

@section('content')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

<section class="h-100 h-custom" style="background-color: #DE7B8D;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-lg-8">
                                <div class="p-5">
                                    <div class="d-flex justify-content-between align-items-center mb-5">
                                        <h1 class="fw-bold mb-0">Twój Koszyk</h1>
                                        <h6 class="mb-0 text-muted">{{ count($cartItems) }} Ilość Produktów</h6>
                                    </div>
                                    <hr class="my-4">

                                    @foreach ($cartItems as $cartItem)
                                    <div class="row mb-4">
                                        <div class="col-md-2">
                                            <img class="card-img-top img-fluid" src="{{ asset($cartItem->product->image_path) }}" alt="{{ $cartItem->name }}">
                                        </div>
                                        <div class="col-md-4">
                                            <h6 class="text-muted">{{ $cartItem->product_type }}</h6>
                                            <h6>{{ $cartItem->name }}</h6>
                                        </div>
                                        <div class="col-md-3 d-flex align-items-center">
                                            <form method="POST" action="{{ route('cart.update', ['cartItem' => $cartItem->id]) }}" class="d-flex align-items-center">
                                                @csrf
                                                @method('PUT')
                                                <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                                <input min="1" name="quantity" value="{{ $cartItem->quantity }}" type="number" class="form-control form-control-sm" style="width: 50px;">
                                                <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                                <button type="submit" class="btn btn-primary">Aktualizuj</button>
                                            </form>
                                        </div>
                                        <div class="col-md-2">
                                            <h6>{{ $cartItem->price }} zł</h6>
                                        </div>
                                        <div class="col-md-1">
                                            <form action="{{ route('cart.destroy', ['cartItem' => $cartItem->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i class="fas fa-times"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    @endforeach

                                    <div class="pt-5">
                                        <h6><a href="{{ url('/') }}" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Kontynuuj zakupy</a></h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 bg-body-tertiary">
                                <div class="p-5">
                                    <h3 class="fw-bold mb-5 mt-2 pt-1">Podsumowanie</h3>
                                    <hr class="my-4">

                                    <div class="d-flex justify-content-between mb-4">
                                        <h5 class="text-uppercase">Ilość Produktów {{ count($cartItems) }}</h5>
                                        <h5>{{ $totalPrice }} zł</h5>
                                    </div>

                                    <h5 class="text-uppercase mb-3">Dostawa</h5>
                                    <form method="POST" action="{{ route('cart.updateDelivery') }}">
                                        @csrf
                                        <select name="delivery_option" onchange="this.form.submit()">
                                            @foreach ($deliveryOptions as $option)
                                            <option value="{{ $option->id }}" {{ session('selectedDeliveryOption') == $option->id ? 'selected' : '' }}>
                                                {{ $option->name }} - {{ $option->price }} zł
                                            </option>
                                            @endforeach
                                        </select>
                                    </form>
                                    
                                    <hr class="my-4">

                                    <div class="d-flex justify-content-between mb-5">
                                        <h5 class="text-uppercase">SUMA</h5>
                                        <!-- Całkowita suma produktów + koszt dostawy -->
                                        <h5>{{ $totalWithDelivery }} zł</h5>
                                    </div>
                                    

                                    <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn_koszyk">Kup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
