@extends('layouts.app')
@section('content')
    {{-- here we access the $data array and use its 'title' key as a varible we can ref --}}
    <h1>{{ $title }}</h1>
    {{-- first we check for the services --}}
    @if (count($services) > 0)
        {{-- if there is services we are going to loop though them --}}
        {{-- this for each loop is backwards compaired to what I am used to using --}}
        <ul class="list-group">
            @foreach ($services as $service)
                <li class="list-group-item">{{ $service }}</li>
            @endforeach
        </ul>
    @endif


{{-- this may have also worked but it is not as dynamic as above --}}
    {{-- <p>This is the Services page</p>
    <p>We have {{ $services[0] }},</p>
    <p>and {{ $services[1] }},</p>
    <p>and {{ $services[2] }},</p> --}}
@endsection
