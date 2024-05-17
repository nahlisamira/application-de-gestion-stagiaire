@extends('layouts.app')

@section('title')
Welcome | Laravel Employe App
@endsection

@section('content')
<div class="container">
    <div class="row my-5">
        <div class="col-md-6 mx-auto">
            <div class="card p-4">
                <div class="card-header bg-blue text-center">
                    <h3 class="p-2">WELCOME BACK</h3>
                </div>
                <div class="card-body d-flex justify-content-start">
                    @guest
                    <a href="{{ url('/login') }}" class="btn btn-outline-primary">Login</a>
                    @endguest
                    @auth
                    <a href="{{ url('admin/home') }}" class="btn btn-outline-primary">Home</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
