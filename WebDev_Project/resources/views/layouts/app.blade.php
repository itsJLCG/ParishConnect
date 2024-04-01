<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @viteReactRefresh
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    {{-- @liveWireStyles
    @powerGridStyles --}}
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'ESHOP Beauty and Bottles') }}
                    <img src="/images/logos.png" alt="Logo Image" style="max-height: 50px; margin-left: 10px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto d-flex">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    @if(Auth::user()->role === 'Admin')
                                        <a class="dropdown-item" href="{{ route('adminPage') }}">Stocks</a>
                                        <a class="dropdown-item" href="{{ url('/product/datatable') }}">Product Creation</a>
                                        <a class="dropdown-item" href="{{ url('/user/datatable') }}">Account Creation/Activation</a>
                                        <a class="dropdown-item" href="{{ url('/feedback/datatable') }}">Feedback Views</a>
                                        <a class="dropdown-item" href="{{ url('/post/datatable') }}">Create Promotions</a>
                                        <a class="dropdown-item" href="{{ route('trackings') }}">Tracking Status</a>
                                        <a class="dropdown-item" href="{{ url('/stocks') }}">Stocks</a>
                                    @endif
                                    @if(Auth::user()->role === 'user')
                                    <a class="dropdown-item" href="{{ route('home') }}">Shop Here</a>
                                    <a class="dropdown-item" href="{{ route('cart.show') }}">Cart</a>
                                    <a class="dropdown-item" href="{{ url('/posts') }}">Promotions</a>
                                    <a class="dropdown-item" href="{{ route('orders') }}">Orders Status</a>
                                    <a class="dropdown-item" href="{{ url('/feedback/datatable') }}">Feedback Creation</a>
                                    <a class="dropdown-item" href="{{ url('/profile') }}">Profile</a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    {{-- @liveWireScripts
    @powerGridScripts --}}
</body>
</html>
