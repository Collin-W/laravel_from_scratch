<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
{{-- bootstrap comes with laravel by default --}}
        <link rel="stylesheet" href="{{asset('js/app.js')}}">
        <title>{{config('app.name', 'laravel_from_scratch')}}</title>


    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            @yield('content')
        </div>
            
   </body>
</html>
<!-- layouts can be used to keep code dry -->