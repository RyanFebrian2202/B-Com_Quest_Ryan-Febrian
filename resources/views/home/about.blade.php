@extends('layouts.layout')

@section('judul','Contact Us')

@section('style')
<link rel="stylesheet" href="{{asset('css/about.css')}}">
@endsection

@section('content')
<div class="about-us">
    <div class="about-container">
        <h1>About Us</h1>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim mattis sit placerat in semper sed
            volutpat cursus. Nullam ac facilisi orci tellus, vel arcu. Fermentum erat augue dui malesuada
            aliquam. Bibendum magna orci, pharetra, ultrices diam. In vivamus tristique faucibus ac. Id nec
            lectus amet facilisi dui ut sit enim. Volutpat imperdiet ultricies gravida dis aliquet vulputate
            sapien nisl netus. Sem dui, dui id donec.</p>
        <br><br><br>
        <h1>Our Team</h1>
        <hr>
        <div class="teams-cards">
            <div class="teams-card">
                <div class="teams-image">
                    <img src="{{asset('images/Derian.jpg')}}" alt="team 1">
                </div>
                <div class="teams-content">
                    <hr>
                    <h2>Derian Ardenichson</h2>
                </div>
            </div>
            <div class="teams-card">
                <div class="teams-image">
                    <img src="{{asset('images/Jose.jpg')}}" alt="team 2">
                </div>
                <div class="teams-content">
                    <hr>
                    <h2>Jose Stephen</h2>
                </div>
            </div>
            <div class="teams-card">
                <div class="teams-image">
                    <img src="{{asset('images/ryan.jpg')}}" alt="team 3">
                </div>
                <div class="teams-content">
                    <hr>
                    <h2>Ryan Febrian</h2>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
