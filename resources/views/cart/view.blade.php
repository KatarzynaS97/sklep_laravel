@extends('layout.app')

@section('content')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

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

{{-- @extends('layout.app')

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
                      @if(Auth::id())
                      @foreach ($cartItems as $cartItem)
                      <h6 class="mb-0 text-muted">3 items</h6>
                    </div>
                    <hr class="my-4">
  
                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                      <div class="col-md-2 col-lg-2 col-xl-2">
                        <img class="card-img-top" src="{{ asset($cartItem->product->image) }}" alt="{{ $cartItem->product->name }}">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">{{ $cartItem->product->name }}</h5>
                        <p class="card-text">Cena: {{ $cartItem->price }}</p>
                        <p class="card-text">Ilość: {{ $cartItem->quantity }}</p>
                        {{-- <form action="{{ route('cart.update', ['productType' => $cartItem->product_type, 'id' => $cartItem->product_id]) }}" method="POST">
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
        @endif
    @else 
  
                    <hr class="my-4">
  
                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                      <div class="col-md-2 col-lg-2 col-xl-2">
                        <img
                          src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img6.webp"
                          class="img-fluid rounded-3" alt="Cotton T-shirt">
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-3">
                        <h6 class="text-muted">Shirt</h6>
                        <h6 class="mb-0">Cotton T-shirt</h6>
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                          onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                          <i class="fas fa-minus"></i>
                        </button>
  
                        <input id="form1" min="0" name="quantity" value="1" type="number"
                          class="form-control form-control-sm" />
  
                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                          onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                          <i class="fas fa-plus"></i>
                        </button>
                      </div>
                      <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                        <h6 class="mb-0">€ 44.00</h6>
                      </div>
                      <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                        <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                      </div>
                    </div>
  
                    <hr class="my-4">
  
                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                      <div class="col-md-2 col-lg-2 col-xl-2">
                        <img
                          src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img7.webp"
                          class="img-fluid rounded-3" alt="Cotton T-shirt">
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-3">
                        <h6 class="text-muted">Shirt</h6>
                        <h6 class="mb-0">Cotton T-shirt</h6>
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                          onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                          <i class="fas fa-minus"></i>
                        </button>
  
                        <input id="form1" min="0" name="quantity" value="1" type="number"
                          class="form-control form-control-sm" />
  
                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                          onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                          <i class="fas fa-plus"></i>
                        </button>
                      </div>
                      <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                        <h6 class="mb-0">€ 44.00</h6>
                      </div>
                      <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                        <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                      </div>
                    </div>
  
                    <hr class="my-4">
  
                    <div class="pt-5">
                      <h6 class="mb-0"><a href="{{ url('/') }}" class="text-body"><i
                            class="fas fa-long-arrow-alt-left me-2"></i>Kontynuuj zakupy</a></h6>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 bg-body-tertiary">
                  <div class="p-5">
                    <h3 class="fw-bold mb-5 mt-2 pt-1">Podsumowanie</h3>
                    <hr class="my-4">
  
                    <div class="d-flex justify-content-between mb-4">
                      <h5 class="text-uppercase">items 3</h5>
                      <h5>€ 132.00</h5>
                    </div>
  
                    <h5 class="text-uppercase mb-3">Dostawa</h5>
  
                    <div class="mb-4 pb-2">
                      <select data-mdb-select-init>
                        <option value="1">DPD - 25zł</option>
                        <option value="2">DHL - 20zł</option>
                        <option value="3">InPost - 15zł</option>
                        <option value="4">Poczta Polska - 12zł</option>
                      </select>
                    </div>
  
  
                    <hr class="my-4">
  
                    <div class="d-flex justify-content-between mb-5">
                      <h5 class="text-uppercase">SUMA</h5>
                      <h5>€ 137.00</h5>
                    </div>
  
                    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn_koszyk "
                    >Kup</button>
  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection --}}