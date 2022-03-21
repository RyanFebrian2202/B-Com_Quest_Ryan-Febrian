@extends('layouts.admin.layout')

@section('judul','Admin Home')

@section('style')
<link rel="stylesheet" href="{{asset('css/admin/admin-product.css')}}">
@endsection

@section('content')

{{-- Manage Banner --}}
<div class="product-container rounded-3 pt-2 pb-2">
    <div class="product-bg col-md-12 table-wrapper">
        <h2 style="font-weight: bold; color: white"><i class="uil uil-apps"></i> Manage Product</h2>
        <div class="manage-hr">
            <hr>
        </div>

        {{-- Menu Bar --}}
        <header>
            <div class="add-button">
                <a href="{{route('getTeaPage')}}" class="btn btn-dark btn-lg mb-4" style="font-weight: bold">Add Tea</a>
                <a href="{{route('getCoffeePage')}}" class="btn btn-dark btn-lg mb-4" style="font-weight: bold">Add
                    Coffee</a>
                <a href="{{route('getPastryPage')}}" class="btn btn-dark btn-lg mb-4" style="font-weight: bold">Add
                    Pastry</a>
            </div>
        </header>
        <br>

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
                                <a href="{{route('getUpdateTea', ['id'=> $tea->id])}}"
                                    class="btn btn-success btn-lg mb-4" style="font-weight: bold">Update</a>
                                <form action="{{route('deleteTea', ['id'=>$tea->id])}}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-lg mb-4"
                                        style="font-weight: bold">Delete</button>
                                </form>
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
                            <div class="col-md-12 coffee-content bg-light p-2 rounded-3">
                                <h3 class="judul" style="font-weight: bold">{{$coffee->name}}</h3>
                                <img src="{{asset('storage/image/'.$coffee->picture)}}" alt="">
                                <h3>Quantity: {{$coffee->quantity}}</h3>
                                <h3>Price: Rp.{{$coffee->price}}</h3>
                                <a href="{{route('getUpdateCoffee', ['id'=> $coffee->id])}}"
                                    class="btn btn-success btn-lg mb-4" style="font-weight: bold">Update</a>
                                <form action="{{route('deleteCoffee', ['id'=>$coffee->id])}}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-lg mb-4"
                                        style="font-weight: bold">Delete</button>
                                </form>
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
                                <a href="{{route('getUpdatePastry', ['id'=> $pastry->id])}}"
                                    class="btn btn-success btn-lg mb-4" style="font-weight: bold">Update</a>
                                <form action="{{route('deletePastry', ['id'=>$pastry->id])}}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-lg mb-4"
                                        style="font-weight: bold">Delete</button>
                                </form>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection
