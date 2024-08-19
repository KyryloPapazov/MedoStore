@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')

    <!-- Slider (Carousel) -->
    <div id="beeCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#beeCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#beeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#beeCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('/img/honey.jpg') }}" class="d-block w-100" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welcome to MedoStore</h5>
                    <p>Your one-stop shop for all beekeeping products!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/img/beekep.jpg') }}" class="d-block w-100" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>High-Quality Honey</h5>
                    <p>Discover our premium selection of honey products.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/img/honey2.jpg') }}" class="d-block w-100" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Beekeeping Equipment</h5>
                    <p>Everything you need for your beekeeping needs.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#beeCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#beeCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <section class="text-center my-5">
        <h2>Welcome to MedoStore</h2>
        <p>We offer the best honey and beekeeping equipment so you can enjoy natural products straight from the hive.</p>
    </section>
    <section class="container my-5">
        <h3 class="text-center">Popular Products</h3>
        <div class="row">
            @foreach ($viewData["products"]->slice(0,3) as $product)

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('/storage/'.$product->getImage()) }}" class="card-img-top img-card">
                        <div class="card-body text-center">
                            <a href="{{ route('product.show', ['id'=> $product->getId()]) }}"
                               class="btn bg-primary text-white">{{ $product->getName() }}</a>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
        <div class="text-center">
            <a href="{{ route('product.index') }}" class="btn btn-lg btn-success">Переглянути Всі Продукти</a>
        </div>

    </section>

    <style>
        /* Стилі для адаптивності каруселі */
        @media (max-width: 767.98px) {
            .carousel-caption {
                display: none; /* Приховуємо підписи на малих екранах */
            }
        }

        @media (min-width: 768px) {
            .carousel-inner img {
                object-fit: cover; /* Додає покриття зображень */
                height: 700px; /* Встановлює фіксовану висоту для зображень */
            }
        }

        .carousel-inner img {
            max-height: 700px; /* Максимальна висота зображень */
        }
    </style>

@endsection
