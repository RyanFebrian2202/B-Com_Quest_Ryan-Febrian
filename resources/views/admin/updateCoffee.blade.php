@extends('layouts.admin.layout')

@section('judul','Update Coffee')

@section('style')
<link rel="stylesheet" href="{{asset('css/registration.css')}}">
@endsection

@section('content')
<div class="registerPage">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="form-bg col-md-6 p-4 rounded-3">
                <h1 style="font-weight: bold; display: flex; justify-content: center; align-self: center">Update Coffee
                </h1>
                <br>

                <form action="{{route('updateCoffee', ['id'=> $coffee->id])}}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('patch')

                    <div class="mb-3">
                        <label for="name" class="form-label" style="font-weight: bold">Name</label>
                        <input name="name" type="text" class="form-control" id="formGroupExampleInput"
                            value='{{$coffee->name}}'>
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="picture" class="form-label" style="font-weight: bold">Picture</label>
                        <input name='picture' type="file" class="form-control" id="formGroupExampleInput"
                            value='{{$coffee->picture}}'>
                    </div>
                    @error('picture')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="quantity" class="form-label" style="font-weight: bold">Quantity</label>
                        <input name='quantity' type="numeric" class="form-control" id="formGroupExampleInput"
                            value='{{$coffee->quantity}}'">
                    </div>
                    @error('quantity')
                    <div class=" alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="price" class="form-label" style="font-weight: bold">Price</label>
                        <input name='price' type="numeric" class="form-control" id="formGroupExampleInput"
                            value='{{$coffee->price}}'>
                    </div>
                    @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div style="display: flex; justify-content: center; align-self: center;">
                        <button class=" btn btn-success p-2 px-3" type="submit" style="font-weight: bold">
                            <b>Update</b></button>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>


@endsection
