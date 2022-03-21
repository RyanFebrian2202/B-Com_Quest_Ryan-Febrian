@extends('layouts.layout')

@section('judul', 'Registration')

@section('style')
<link rel="stylesheet" href="{{asset('css/registration.css')}}">
@endsection

@section('content')
<div class="registerPage">
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="form-bg col-6 p-4">
                <h1 style="font-weight: bold; display: flex; justify-content: center; align-self: center">Registration
                </h1>
                <br>

                <form action="{{ route('register')}}" method="POST" enctype="multipart/form-data">
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
                        <label for="email" class="form-label" style="font-weight: bold; color: white">Email</label>
                        <input name='email' type="email" class="form-control" id="formGroupExampleInput"
                            placeholder="Input email">
                    </div>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="date_of_birth" class="form-label" style="font-weight: bold; color: white">Date of
                            Birth</label>
                        <input name='date_of_birth' type="date" class="form-control" id="formGroupExampleInput"
                            placeholder="Input date of birth">
                    </div>
                    @error('date_of_birth')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="gender" class="form-label" style="font-weight: bold; color: white">Gender</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value="Male"
                                id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value="Female"
                                id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Female
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                N/A
                            </label>
                        </div>
                    </div>
                    @error('gender')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="telephone" class="form-label" style="font-weight: bold; color: white">Telephone
                            Number</label>
                        <input name='telephone' type="numeric" class="form-control" id="formGroupExampleInput"
                            placeholder="Input telephone number">
                    </div>
                    @error('telephone')
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
                    <div class="mb-3">
                        <label for="confirmpassword" class="form-label" style="font-weight: bold; color: white">Confirm
                            Password</label>
                        <input name='password_confirmation' type="password" class="form-control"
                            id="formGroupExampleInput" placeholder="Input password">
                    </div>
                    @error('password_confirmation')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div style="display: flex; justify-content: center; align-self: center;">
                        <button class=" btn btn-success p-2 px-3" type="submit" style="font-weight: bold">
                            <b>Register</b></button>
                    </div>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</div>

@endsection
