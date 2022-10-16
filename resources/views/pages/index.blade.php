@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        {{-- this is how we access a variable from our PageController --}}
        <h1>{{ $title }}</h1>
        <p>This is the laravel app from the Laravel From Scratch Youtube series</p>
        <p><a class="btn btn-primary btn-lg" href="/login">Login</a><a class="btn btn-primary btn-lg" href="/signup">Signup</a></p>
    </div>
@endsection
