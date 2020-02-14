@php
    //get the full url
    $url = url()->full();
    //get the position of the last "/"
    $pos = strrpos($url,"/");
    //cut the string from 0 to the correct position
    $upOneUrl = substr($url,0,$pos);
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <title>Hello World</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/minimalist.css')}}">
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right user">
            @auth
                <a href="{{ url('/home') }}">{{ Auth::user()->name }}</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
    @if (Route::currentRouteName() != 'welcome')

        <div class="top-left home">
            <a href="/">Home</a>
            <a href="{{$upOneUrl}}">Back</a>
        </div>
    @endif

    <div class="content">
        @yield('content')
    </div>
</div>
</body>
</html>
