@extends('layouts.layout')

@section('judul', 'Products')

@section('style')
<link rel="stylesheet" href="{{asset('css/product.css')}}">
@endsection

@section('content')
<div class="home-container mt-5">

    {{-- MENU BAR --}}
    <header>
        <h2 style="font-weight: bold">All Products</h2>
    </header>
    <div class="header-hr">
        <hr>
    </div>
    <br><br>

    <section id="view-tea">
        <h2>Tea</h2>
        <hr>
        <div class="row">
            <div class="container">
                <div class="row">
                    @foreach ($teas as $tea)
                    <div class="col-md-3 mb-5">
                        <div class="col-md-12 tea-content bg-light p-2 rounded-3">
                            <h3 class="judul" style="font-weight: bold">{{$tea->name}}</h3>
                            <img src="{{asset('storage/image/'.$tea->picture)}}" alt="">
                            <h3>Quantity: {{$tea->quantity}}</h3>
                            <h3>Price: Rp.{{$tea->price}}</h3>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section id="view-coffee">
        <h2>Coffee</h2>
        <hr>
        <div class="row">
            <div class="container">
                <div class="row">
                    @foreach ($coffees as $coffee)
                    <div class="col-md-3 mb-5">
                        <div class="col-md-12 tea-content bg-light p-2 rounded-3">
                            <h3 class="judul" style="font-weight: bold">{{$coffee->name}}</h3>
                            <img src="{{asset('storage/image/'.$coffee->picture)}}" alt="">
                            <h3>Quantity: {{$coffee->quantity}}</h3>
                            <h3>Price: Rp.{{$coffee->price}}</h3>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section id="view-pastry">
        <h2>Pastry</h2>
        <hr>
        <div class="row">
            <div class="container">
                <div class="row">
                    @foreach ($pastries as $pastry)
                    <div class="col-md-3 mb-5">
                        <div class="col-md-12 pastry-content bg-light p-2 rounded-3">
                            <h3 class="judul" style="font-weight: bold">{{$pastry->name}}</h3>
                            <img src="{{asset('storage/image/'.$pastry->picture)}}" alt="">
                            <h3>Quantity: {{$pastry->quantity}}</h3>
                            <h3>Price: Rp.{{$pastry->price}}</h3>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
