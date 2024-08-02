
@extends('layout')
@section('title', 'Ma Boutique Laravel')

@section('content')
<h1>Ma Boutique Laravel</h1>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="path_to_your_image1.jpg" class="d-block w-100" alt="Image 1">
            <div class="carousel-caption d-none d-md-block">
                <h5>Image 1</h5>
                <p>Description de l'image 1.</p>
                <a class="btn btn-primary" href="#" role="button">Découvrir</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="path_to_your_image2.jpg" class="d-block w-100" alt="Image 2">
            <div class="carousel-caption d-none d-md-block">
                <h5>Image 2</h5>
                <p>Description de l'image 2.</p>
                <a class="btn btn-primary" href="#" role="button">Découvrir</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="path_to_your_image3.jpg" class="d-block w-100" alt="Image 3">
            <div class="carousel-caption d-none d-md-block">
                <h5>Image 3</h5>
                <p>Description de l'image 3.</p>
                <a class="btn btn-primary" href="#" role="button">Découvrir</a>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

@endsection


