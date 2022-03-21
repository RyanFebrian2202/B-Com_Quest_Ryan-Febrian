@extends('layouts.admin.layout')

@section('judul','Admin User')

@section('style')
<link rel="stylesheet" href="{{asset('css/admin/admin-product.css')}}">
@endsection

@section('content')
{{-- Manage Banner --}}
<div class="product-container rounded-3 pt-2 pb-2">
    <div class="product-bg col-md-12 table-wrapper">
        <header>
            <h2 style="font-weight: bold; color: white"><i class="uil uil-apps"></i> Manage User</h2>
            <div class="search">
                <input class="form-control me-2" name="search" type="search" placeholder="Search User" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </div>
        </header>
        <div class="manage-hr">
            <hr>
        </div>
        <br>
        <section id="view-user">
            <h2>User</h2>
            <hr>
            {{-- Manage Book --}}
            <table class="table">
                <thead>
                    <tr align="center">
                        <th>#</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Date of Birth</th>
                        <th>Telephone</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    ?>
                    @foreach ($users as $user)
                    <tr align="center">
                        <th>{{$nomor++}}</th>
                        <td>{{$user->username}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->date_of_birth}}</td>
                        <td>{{$user->telephone}}</td>
                        <td class="aksi">
                            <form action="{{route('deleteUser', ['id'=>$user->id])}}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Ban</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </div>
</div>


@endsection
