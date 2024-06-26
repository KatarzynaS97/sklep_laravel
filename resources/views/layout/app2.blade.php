<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>modowo</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/ikona1.png') }}" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles.css" rel="stylesheet" />
</head>

<body>
    <div  class="container_produkt">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container  px-4 px-lg-5">
            <a class="navbar-brand" href="{{ url('/') }}">MODOWO.PL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
                </div>
            </div>
        </nav>

        @yield('content')
        <!-- Footer-->
        <footer class="py-5 bg-dark container_footer2 ">
            <div class="">

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
                        <li class="li_footer"><a href="{{ url('/shopping_prices') }}" class="linki_footer">Ceny wysyłek</a>
                        </li>
                        <li class="li_footer"><a href="{{ url('/exchange') }}" class="linki_footer">Zwroty,
                                wymiana,reklamacjek</a></li>
                        <li class="li_footer"><a href="#" class="linki_footer">Polityka prywatności</a></li>

                    </ul>
                </div>
                <div class="footer_zamowenia">
                    <p class="m-0 text-center text-white">Zamówenia </p>
                    <ul class="blockquote-footer">
                        <li><a href="#" class="linki_footer">Tabela rozmarów</a></li>
                        <li><a href="#" class="linki_footer">Regulamin</a></li>
                    </ul>
                </div>

        </footer>
    </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
   
    </body>

    </html>
