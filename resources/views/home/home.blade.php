@extends('layouts.layout')

@section('judul','HOME')

@section('style')
<link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection

@section('content')
<section id="home">
    <div class="home-container">
        <div class="home-content">
            <h1>Welcome to</h1>
            <h1>Leblanc Cafe</h1>
        </div>
        <div class="home-button">
            <a href="#about-us">Learn More</a>
        </div>
    </div>
</section>
<section id="about-us">
    <div class="about-container">
        <h1>About Us</h1>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim mattis sit placerat in semper sed
            volutpat cursus. Nullam ac facilisi orci tellus, vel arcu. Fermentum erat augue dui malesuada
            aliquam. Bibendum magna orci, pharetra, ultrices diam. In vivamus tristique faucibus ac. Id nec
            lectus amet facilisi dui ut sit enim. Volutpat imperdiet ultricies gravida dis aliquet vulputate
            sapien nisl netus. Sem dui, dui id donec.</p>
        <div class="about-button">
            <a href="{{route('about')}}">Read More</a>
        </div>
    </div>
</section>
<section id="products">
    <div class="products-container">
        <h1>Our Products</h1>
        <hr>
        <div class="products-cards">
            <div class="products-card">
                <div class="products-content">
                    <h2>Tea</h2>
                    <h2>01</h2>
                </div>
                <div class="products-image">
                    <img src="{{asset('images/tea.jpg')}}" alt="tea">
                </div>
                <div class="products-button">
                    <a href="{{route('product')}}">Our Products</a>
                </div>
            </div>
            <div class="products-card">
                <div class="products-content">
                    <h2>Coffee</h2>
                    <h2>02</h2>
                </div>
                <div class="products-image">
                    <img src="{{asset('images/coffee.jpg')}}" alt=coffee">
                </div>
                <div class="products-button">
                    <a href="{{route('product')}}">Our Products</a>
                </div>
            </div>
            <div class="products-card">
                <div class="products-content">
                    <h2>Pastries</h2>
                    <h2>03</h2>
                </div>
                <div class="products-image">
                    <img src="{{asset('images/pastry.jpg')}}" alt="pastry">
                </div>
                <div class="products-button">
                    <a href="{{route('product')}}">Our Products</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contact-us">
    <div class="contact-container">
        <div class="contact-heading">
            <h1>Contact Us</h1>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="contact-button">
            <a href="{{route('contact')}}">Lets Talk</a>
        </div>
    </div>
</section>
@endsection
