<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <title>@yield('title', 'Online Store')</title>

    <!-- Optional CSS if needed -->
    <style>
        /* Вирівнювання на великих екранах */
        @media (min-width: 992px) {
            .navbar-nav {
                display: flex;
                justify-content: flex-end;
            }
        }
    </style>
</head>
<body>
<!-- header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-warning py-2">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home.index') }}">
            <img src="https://img.icons8.com/color/48/000000/bee.png" alt="Bee Icon" class="me-2"/>
            MedoStore
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link text-dark active" href="{{ route('home.index') }}">Home</a>
                <a class="nav-link text-dark active" href="{{ route('product.index') }}">Products</a>
                <a class="nav-link text-dark active" href="{{ route('cart.index') }}">Cart</a>
                <a class="nav-link text-dark active" href="{{ route('home.about') }}">About</a>


                <div class="bg-dark mx-2 d-none d-lg-block vr"></div>
                @guest
                    <a class="nav-link text-dark active" href="{{ route('login') }}">Login</a>
                    <a class="nav-link text-dark active" href="{{ route('register') }}">Register</a>
                @else
                    <a href="{{ route('myaccount.orders') }}" class="nav-link text-dark active">My Orders</a>
                    <form id="logout" action="{{ route('logout') }}" method="POST">
                        <a role="button" class="nav-link text-dark active"
                           onclick="document.getElementById('logout').submit();">Logout</a>
                        @csrf
                    </form>
                @endguest
            </div>
        </div>
    </div>
</nav>

<header class="masthead bg-light text-dark text-center py-3" style="margin-top: 10px;">
    <div class="container d-flex align-items-center flex-column">
        <h2>@yield('subtitle', 'MedoStore')</h2>
    </div>
</header>

<!-- header -->
<div class="my-2">
    @yield('content')
</div>

<!-- footer -->
<div class="copyright py-4 text-center text-dark" style="background-color: #FFDD57;">
    <div class="container">
        <small>
            Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
                           href="#">
                Kyrylo Papazov
            </a> - <b>For resume</b>
            <br>

            <img src="https://img.icons8.com/color/24/000000/bee.png" alt="Bee Icon"/>
        </small>
    </div>
</div>
<!-- footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>
