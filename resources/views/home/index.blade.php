@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')

    <!-- Slider (Carousel) -->
    <div id="beeCarousel" class="carousel slide mt-4" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#beeCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#beeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#beeCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('/img/game.png') }}" class="d-block w-100" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welcome to MedoStore</h5>
                    <p>Your one-stop shop for all beekeeping products!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/img/game.png') }}" class="d-block w-100" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>High-Quality Honey</h5>
                    <p>Discover our premium selection of honey products.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/img/game.png') }}" class="d-block w-100" alt="Third slide">
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


@endsection
