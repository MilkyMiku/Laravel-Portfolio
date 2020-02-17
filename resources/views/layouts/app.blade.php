@php
    //get the full url
    $url = url()->full();
    //get the position of the last "/"
    $pos = strrpos($url,"/");
    //cut the string from 0 to the correct position
    $upOneUrl = substr($url,0,$pos);
@endphp
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/minimalist.css') }}" rel="stylesheet">
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




{{--<!-- Right Side Of Navbar -->--}}
{{--<ul class="navbar-nav ml-auto">--}}
{{--    <!-- Authentication Links -->--}}
{{--    @guest--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--        </li>--}}
{{--        @if (Route::has('register'))--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--            </li>--}}
{{--        @endif--}}
{{--    @else--}}
{{--        <li class="nav-item dropdown">--}}
{{--            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--            </a>--}}

{{--            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                   onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                    {{ __('Logout') }}--}}
{{--                </a>--}}

{{--                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                    @csrf--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </li>--}}
{{--    @endguest--}}
{{--</ul>--}}
