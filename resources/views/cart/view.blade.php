@extends('layout.app')

@section('content')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
@php

    $deliveryPrice = 0; // Domyślnie ustawiamy wartość na 0

    if (isset($_POST['delivery_option'])) {
        $selected_option = $_POST['delivery_option'];
        
        switch ($selected_option) {
            case '1':
                $deliveryPrice = 25; // DPD - 25 zł
                break;
            case '2':
                $deliveryPrice = 20; // DHL - 20 zł
                break;
            case '3':
                $deliveryPrice = 15; // InPost - 15 zł
                break;
            case '4':
                $deliveryPrice = 12; // Poczta Polska - 12 zł
                break;
            default:
                $deliveryPrice = 0; // Domyślnie, jeśli żadna opcja nie zostanie wybrana
                break;
        }
    }
@endphp
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
                                        <h6 class="mb-0 text-muted">{{ count($cartItems) }}Ilość Produktów</h6>
                                    </div>
                                    <hr class="my-4">

                                    @foreach ($cartItems as $cartItem)
                                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                                        <div class="col-md-2 col-lg-2 col-xl-2">
                                            <img class="card-img-top"  src="{{ asset($cartItem->product->image) }}" alt="{{ $cartItem->name }}">
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                            <h6 class="text-muted">{{ $cartItem->product_type }}</h6>
                                            <h6 class="mb-0">{{ $cartItem->name }}</h6>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <input id="form1" min="1" name="quantity" value="{{ $cartItem->quantity }}" type="number" class="form-control form-control-sm" />
                                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                            <h6 class="mb-0">{{ $cartItem->price }} zł</h6>
                                        </div>
                                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                            <form action="{{ route('cart.remove', ['productType' => $cartItem->product_type, 'id' => $cartItem->product_id]) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i class="fas fa-times"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    @endforeach

                                    <div class="pt-5">
                                        <h6 class="mb-0"><a href="{{ url('/') }}" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Kontynuuj zakupy</a></h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 bg-body-tertiary">
                                <div class="p-5">
                                    <h3 class="fw-bold mb-5 mt-2 pt-1">Podsumowanie</h3>
                                    <hr class="my-4">

                                    <div class="d-flex justify-content-between mb-4">
                                        <h5 class="text-uppercase">Ilosc Produktów {{ count($cartItems) }}</h5>
                                        @php
                                            $totalPrice = array_sum(array_column($cartItems->toArray(), 'price'));
                                        @endphp
                                        <h5>{{ $totalPrice }} zł</h5>
                                    </div>

                                    <h5 class="text-uppercase mb-3">Dostawa</h5>

                                    
                                        <div class="mb-4 pb-2">
                                            <select name="delivery_option" data-mdb-select-init onchange="this.form.submit()">
                                                <option value="1">DPD - 25 zł</option>
                                                <option value="2">DHL - 20 zł</option>
                                                <option value="3">InPost - 15 zł</option>
                                                <option value="4">Poczta Polska - 12 zł</option>
                                            </select>
                                        </div>
                                    </form>
                                    <hr class="my-4">

                                    <div class="d-flex justify-content-between mb-5">
                                        <h5 class="text-uppercase">SUMA</h5>
                                        <h5>{{ $totalPrice + $deliveryPrice }} zł</h5>
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
