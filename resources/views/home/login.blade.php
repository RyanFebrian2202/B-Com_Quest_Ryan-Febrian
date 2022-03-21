@extends('layouts.layout')

@section('judul', 'Login')

@section('style')
<link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section('content')
<div class="loginPage">
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="form-bg col-6 p-4">
                <h1 style="font-weight: bold; display: flex; justify-content: center; align-self: center">Login</h1>
                <br>
                <form action="{{ route('login')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label"
                            style="font-weight: bold; color: white">Username</label>
                        <input name="username" type="text" class="form-control" id="formGroupExampleInput"
                            placeholder="Input username">
                    </div>
                    @error('username')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="password" class="form-label"
                            style="font-weight: bold; color: white">Password</label>
                        <input name='password' type="password" class="form-control" id="formGroupExampleInput"
                            placeholder="Input password">
                    </div>
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div style="display: flex; justify-content: center; align-self: center;">
                        <button class=" btn btn-success p-2 px-3" type="submit" style="font-weight: bold">
                            <b>Login</b></button>
                    </div>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</div>

@endsection
