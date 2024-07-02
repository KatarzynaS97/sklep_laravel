

@extends('layout.app')

@section('content')
@if(session()->has('message'))
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </symbol>
    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
    </symbol>
    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </symbol>
  </svg>
<div class="alert alert-success d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
    </div>
    {{session()->get('message')}}
</div>
    @endif
  <!-- Header-->
  <header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <img src="glowne.png" alt="zdjecie sukienek " class="zdjecie-glowne">
        </div>
    </div>
    </header>
    <!-- Section-->
    <section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @if($dress)
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                  <a href="{{ url('/product1_sukienka/1') }}">"> <img class="card-img-top" src={{$dress->image}} alt={{ $dress->name }}/></a> 
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{{ $dress->name }}</h5>
                            <!-- Product price-->
                            <h2> {{$dress->price}}zł</h2>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <form action="{{ route('cart.add', ['productType' => 'dress', 'id' => $dress->id]) }}" method="POST">

                            @csrf
                            <input type="hidden" name="name" value="{{ $dress->name }}">
                            <input type="number" value="1" min="1" class="form-control" style="width:100px" name="quantity">
                        <br>
                        <button type="submit" class="btn btn_koszyk">Dodaj do koszyka</button>
                        </form>
                </div>
            </div>
        </div>
            
          @endif

          @if($trousers)
            <div class="col mb-5">
                <div class="card h-100">

                    
                    <!-- Product image-->
                   <a href="{{ url('/product1_spodnie/1') }}"> <img class="card-img-top" src={{$trousers->image}} alt={{$trousers->name}} /></a>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{{$trousers->name}}</h5>
                            <!-- Product reviews-->
                            <div class="d-flex justify-content-center small text-warning mb-2">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div>
                            <!-- Product price-->
                        <h2> {{$dress->price}}zł</h2>
                           
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <form action="{{ route('cart.add', ['productType' => 'trousers', 'id' => $trousers->id]) }}" method="POST">

                            @csrf
                            <input type="hidden" name="name" value="{{ $trousers->name }}">
                            <input type="number" value="1" min="1" class="form-control" style="width:100px" name="quantity">
                        <br>
                        <button type="submit" class="btn btn_koszyk">Dodaj do koszyka</button>
                        </form>
                    </div>
                </div>
            </div>
            @endif
            @if($shirt)
            <div class="col mb-5">
                <div class="card h-100">

                    <!-- Product image-->
                   <a href="{{url('product1_shirt/1')}}"> <img class="card-img-top" src={{$shirt->image}} alt={{$shirt->name}}/></a>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{{$shirt->name}}</h5>
                            <!-- Product price-->
                            <h2> {{$shirt->price}}zł</h2>
                            
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <form action="{{ route('cart.add', ['productType' => 'shirt', 'id' => $shirt->id]) }}" method="POST">

                            @csrf
                            <input type="hidden" name="name" value="{{ $shirt->name }}">
                            <input type="number" value="1" min="1" class="form-control" style="width:100px" name="quantity">
                        <br>
                        <button type="submit" class="btn btn_koszyk">Dodaj do koszyka</button>
                        </form>
                    </div>
                </div>
            </div>
            @endif

            @if($tshirt)
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                  <a href="{{url('produt1_tshirt/1')}}"> <img class="card-img-top" src={{$tshirt->image}} alt={{$tshirt->name}} /></a> 
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{{$tshirt->name}}</h5>
                            <!-- Product reviews-->
                            <div class="d-flex justify-content-center small text-warning mb-2">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div>
                            <!-- Product price-->
                            <h2> {{$tshirt->price}}zł</h2>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <form action="{{ route('cart.add', ['productType' => 'tshirt', 'id' => $tshirt->id]) }}" method="POST">

                            @csrf
                            <input type="hidden" name="name" value="{{ $tshirt->name }}">
                            <input type="number" value="1" min="1" class="form-control" style="width:100px" name="quantity">
                        <br>
                        <button type="submit" class="btn btn_koszyk">Dodaj do koszyka</button>
                        </form>
                    </div>
                </div>
            </div>
            @endif
            @if($underwear)
            <div class="col mb-5">
                <div class="card h-100">

                    <!-- Product image-->
                    <a href="{{url('product1_bielizna/1')}}"><img class="card-img-top" src={{$underwear->image}} alt={{$underwear->name}} /></a>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{{$underwear->name}}</h5>
                            <!-- Product price-->
                            <h2> {{$underwear->price}}zł</h2>
                           
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <form action="{{ route('cart.add', ['productType' => 'underwear', 'id' => $underwear->id]) }}" method="POST">

                            @csrf
                            <input type="hidden" name="name" value="{{ $underwear->name }}">
                            <input type="number" value="1" min="1" class="form-control" style="width:100px" name="quantity">
                        <br>
                        <button type="submit" class="btn btn_koszyk">Dodaj do koszyka</button>
                        </form>
                    </div>
                </div>
            </div>
            @endif
            {{-- <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="img/spodnie3.png" alt="spodnie" />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">spodnie czarne</h5>
                            <!-- Product price-->
                         
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn_koszyk fs-6 mt-auto" href="#">Dodaj do
                                koszyka</a></a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">

                    <!-- Product image-->
                    <img class="card-img-top" src="img/bielizna4.png"
                        alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">biustonosz biały</h5>
                            <!-- Product reviews-->
                            <div class="d-flex justify-content-center small text-warning mb-2">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div>
                            <!-- Product price-->
                            <span class="text-muted text-decoration-line-through"></span>
                            
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn_koszyk fs-6 mt-auto" href="#">Dodaj do
                                koszyka</a></a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="img/bielizna1.png"
                        alt="vielizna" />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Bielizna damska</h5>
                          
                        
                            <!-- Product price-->
                       
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn_koszyk fs-6  mt-auto" href="#">Dodaj do
                                koszyka</a></div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</section>
@endsection