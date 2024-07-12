<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Nagłówki meta, tytuł, style CSS, itd. -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name', 'modowo') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/ikona1.png') }}" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    {{-- script --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- Nawigacja -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5 margin_top_header">
            <a class="navbar-brand" href="{{ url('/') }}">MODOWO.PL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page"
                            href="{{ url('/') }}">Strona główna</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/aboutus') }}">O Nas</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Kategorie</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach ($categories as $category)
                                <li><a class="dropdown-item"
                                        href="{{ route('category.show', $category->slug) }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link  btn_logowanie" href="{{ route('login') }}">{{ __('Zaloguj się') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link btn_logowanie"
                                    href="{{ route('register') }}">{{ __('Załóż konto') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <x-dropdown-link :href="route('dashboard')" class="dropdown-item">
                                    {{ __('Mój Profil') }}
                                </x-dropdown-link>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault(); this.closest('form').submit();"
                                            class="dropdown-item  ">
                                            {{ __('Wyloguj się') }}
                                        </x-dropdown-link>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
            <a href="{{ url('cart/view') }}" class="text-decoration-none"><button class="btn btn btn-koszyk_zakupowy "
                    type="submit">
                    <i class="bi-cart-fill me-1"></i>
                    Koszyk

                </button> </a>
        </div>
    </nav>


    <div class="container">
        @yield('content')
    </div>

    <!-- Stopka -->
    <footer class="py-5 bg-dark">
        <div class="container_footer">
            <div class="footer_o_nas">
                <p class="m-0 text-center text-white">O nas</p>
                <ul class="blockquote-footer">
                    <li><a href="{{ url('/contact') }}" class="linki_footer">Kontakt</a></li>
                    <li><a href="{{ url('/aboutus') }}" class="linki_footer">O Nas</a></li>
                </ul>
            </div>
            <div class="footer_informacje">
                <p class="m-0 text-center text-white">Informacje</p>
                <ul class="blockquote-footer">
                    <li class="li_footer"><a href="{{ url('/shopping_prices') }}" class="linki_footer">Ceny
                            wysyłek</a></li>
                    <li class="li_footer"><a href="{{ url('/exchange') }}" class="linki_footer">Zwroty, wymiana,
                            reklamacje</a></li>
                    <li class="li_footer"><a href="{{ url('/cookies') }}" class="linki_footer">Polityka
                            prywatności</a></li>
                </ul>
            </div>
            <div class="footer_zamowenia">
                <p class="m-0 text-center text-white">Zamówienia</p>
                <ul class="blockquote-footer">
                    <li><a href="{{ url('/size_tables') }}" class="linki_footer">Tabela rozmiarów</a></li>
                    <li><a href="{{ url('/statute') }}" class="linki_footer">Regulamin</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Skrypty JS aplikacji -->
    <script src="js/scripts.js"></script>
</body>

</html>
