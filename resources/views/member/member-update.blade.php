@extends('layouts.member.layout')

@section('judul','Member Dashboard')

@section('style')
<link rel="stylesheet" href="{{asset('css/registration.css')}}">
@endsection

@section('content')
<div class="registerPage">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="form-bg col-md-6 p-4 rounded-3">
                <h1 style="font-weight: bold; display: flex; justify-content: center; align-self: center">Update Profile
                </h1>
                <br>

                <form action="{{route('updateUser', ['id'=> $user->id])}}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('patch')

                    <div class="mb-3">
                        <label for="username" class="form-label" style="font-weight: bold">Username</label>
                        <input name="username" type="text" class="form-control" id="formGroupExampleInput"
                            value='{{$user->username}}'>
                    </div>
                    @error('username')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="email" class="form-label" style="font-weight: bold">Email</label>
                        <input name='email' type="email" class="form-control" id="formGroupExampleInput"
                            value='{{$user->email}}'>
                    </div>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="date_of_birth" class="form-label" style="font-weight: bold">Date of birth</label>
                        <input name='date_of_birth' type="date" class="form-control" id="formGroupExampleInput"
                            value='{{$user->date_of_birth}}'>
                    </div>
                    @error('date_of_birth')
                    <div class=" alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="gender" class="form-label" style="font-weight: bold">Gender</label>
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
                        <label for="telephone" class="form-label" style="font-weight: bold">Telephone</label>
                        <input name='telephone' type="numeric" class="form-control" id="formGroupExampleInput"
                            value='{{$user->telephone}}'>
                    </div>
                    @error('telephone')
                    <div class=" alert alert-danger">{{ $message }}</div>
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
