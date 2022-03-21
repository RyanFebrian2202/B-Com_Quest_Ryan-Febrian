@extends('layouts.member.layout')

@section('judul','Member Dashboard')

@section('style')
<link rel="stylesheet" href="{{asset('css/registration.css')}}">
@endsection

@section('content')
<?php
    use App\Models\User;
    $id = Auth::user()->id;
    $user = User::find($id);
?>
<div class="registerPage">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="form-bg col-md-6 p-4 rounded-3">
                <h1 style="font-weight: bold; display: flex; justify-content: center; align-self: center">Profile</h1>
                <br>
                <div class="mb-3">
                    <label for="username" class="form-label" style="font-weight: bold">Userame</label>
                    <label for="username" class="form-label" id="formGroupExamplelabel">{{$user->username}}</label>
                </div>
                <div class="mb-3">
                    <label for="picture" class="form-label" style="font-weight: bold">Email</label>
                    <label for='picture' class="form-label" id="formGroupExamplelabel">{{$user->email}}</label>
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label" style="font-weight: bold">Date of birth</label>
                    <label for='quantity' class="form-label" id="formGroupExamplelabel">{{$user->date_of_birth}}</label>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label" style="font-weight: bold">Gender</label>
                    <label for='price' class="form-label" id="formGroupExamplelabel">{{$user->gender}}</label>
                </div>
                <div class="mb-3">
                    <label for="telephone" class="form-label" style="font-weight: bold">Telephone</label>
                    <label for='telephone' class="form-label" id="formGroupExamplelabel">{{$user->telephone}}</label>
                </div>
                <div class="mb-3">
                    <a href="{{route('getUpdateUser', ['id'=> $user->id])}}"
                        class="btn btn-success btn-lg mb-4" style="font-weight: bold">Update</a>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>

@endsection
