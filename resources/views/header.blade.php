<header>
    {{--    <!-- Fixed navbar -->--}}
    {{--    <nav class="navbar navbar-expand-md navbar-dark  bg-dark mb-5 ps-3 ">--}}
    {{--        <a class="navbar-brand" href="{{ url('/') }}">Mon premier Site sur Laravel</a>--}}
    {{--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"--}}
    {{--                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">--}}
    {{--            <span class="navbar-toggler-icon"></span>--}}
    {{--        </button>--}}
    {{--        <div class="collapse navbar-collapse" id="navbarCollapse">--}}
    {{--            <ul class="navbar-nav mr-auto">--}}
    {{--                <li class="nav-item active">--}}
    {{--                    <a class="nav-link" href="{{ url('/products') }}">Produits</a>--}}
    {{--                </li>--}}
    {{--                <li class="nav-item">--}}
    {{--                    <a class="nav-link" href="{{ url('/cart') }}">Panier</a>--}}

    {{--            </ul>--}}

    {{--        </div>--}}
    {{--    </nav>--}}


    <nav class="navbar navbar-expand-md navbar-dark navbar-custom mb-5">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="{{ asset('images/SuperShoesLOGO.png') }}" alt="mon" height="40"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/products') }}">Toutes les chaussures</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="product-list.blade.php">Chaussures de Sport</a></li>
                    <li class="nav-item"><a class="nav-link" href="product-list.blade.php">Sneakers</a></li>
                    <li class="nav-item"><a class="nav-link" href="product-list.blade.php">Chaussures de Ville</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Panier</a></li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Rechercher</button>
                </form>
            </div>
        </div>
    </nav>
</header>
