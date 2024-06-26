<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
   
    <title>{{ config('app.name', 'modowo') }}</title>
  
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/ikona1.png') }}" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    {{-- script --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
   
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5 margin_top_header">
            <a class="navbar-brand" href="{{ url('/') }}">MODOWO.PL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"   
                id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    

                        <li class="nav-item"><a class="nav-link active" aria-current="page"
                                href="{{ url('/') }}">Strona główna</a>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="{{ url('/aboutus') }}">O Nas</a></li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Kategorie</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <li><a class="dropdown-item" href="{{ url('/dress') }}">Sukienki</a></li>
                                <li><a class="dropdown-item" href="{{ url('/trousers') }}">Spodnie</a></li>
                                <li><a class="dropdown-item" href="{{ url('/tshirt') }}">T-shirt</a></li>
                                <li><a class="dropdown-item" href="{{ url('/shirt') }}">Koszule</a></li>
                                <li><a class="dropdown-item" href="{{ url('/underwear') }}">Bielizna</a></li>
                                <li><a class="dropdown-item" href="{{ url('/socks') }}">Skarpetki</a></li>


                            </ul>
                        </li>
                    </ul>
                   
                    <div class="search ">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0 " type="submit">Szukaj</button>
                      </form>
                   
                    </div>
                  
                        
                        
                   
                </div>
                {{-- @include('layout.navigation')
            
                <!-- Page Heading -->
                @isset($header)
                    <header >
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endisset 
                    <form class="d-flex"> --}}

            <div id="app">
     
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    {{-- <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul> --}}

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                            <form class="d-flex m-1" >
                                <button class="btn btn_logowanie" type="submit">  
                                    <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __(' Zaloguj się') }}</a>
                                   
                                </li>
                                
                            </button>
                        </form>
                            @endif

                            @if (Route::has('register'))
                            <form class="d-flex m-2">
                                <button class=" btn btn_logowanie" type="submit">
                               
                           
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Załóż konto') }}</a>
                                </li>
                            </button>
                        </form>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                   <x-slot name="content">
                                    <x-dropdown-link :href="route('profile.edit')" class="text-decoration-none text-dark dropdown-item">
                                    {{ __('Mój Profil') }}
                                    </x-dropdown-link>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <x-dropdown-link :href="route('logout')"  class="text-decoration-none text-dark dropdown-item"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                {{ __('Wyloguj się') }}
                                            </x-dropdown-link>
                                        </form>
                                </div>
                            </li>
                        @endguest
                        </ul>
                        </div>
                    </div>
                </div>
                    <a href="{{url('/cart')}}" class="text-decoration-none"><button class="btn btn btn-koszyk_zakupowy " type="submit">
                        <i class="bi-cart-fill me-1"></i>
                            Koszyk
                       
                    </button>  </a>
           
        </div>
    </nav>
        
    @yield('content');
  
    <!-- Footer-->
    <footer class="py-5 bg-dark ">
        <div class="container_footer">

            <div class="footer_o_nas">
                <p class="m-0 text-center text-white">O nas </p>
                <ul class="blockquote-footer">
                    <li><a href="{{ url('/contact') }}" class="linki_footer">Kontakt</a></li>
                    <li><a href="{{ url('/aboutus') }}" class="linki_footer">O Nas</a></li>
                </ul>
            </div>
            <div class="footer_informacje">
                <p class="m-0 text-center text-white">Informacje </p>
                <ul class="blockquote-footer">
                    <li class="li_footer"><a href="{{ url('/shopping_prices') }}" class="linki_footer">Ceny wysyłek</a></li>
                    <li class="li_footer"><a href="{{ url('/exchange') }}" class="linki_footer">Zwroty, wymiana,reklamacjek</a></li>
                    <li class="li_footer"><a href="{{ url('/cookies') }}" class="linki_footer">Polityka prywatności</a></li>

                </ul>
            </div>
            <div class="footer_zamowenia">
                <p class="m-0 text-center text-white">Zamówenia </p>
                <ul class="blockquote-footer">
                    <li><a href="{{ url('/size_tables') }}" class="linki_footer">Tabela rozmarów</a></li>
                    <li><a href="{{ url('/statute') }}" class="linki_footer">Regulamin</a></li>
                </ul>
            </div>

    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
