<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <!--  <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> -->

    <!-- CSS -->
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css
') }}" rel="stylesheet" type="text/css">
    <link href="{{asset('https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css')}}" rel='stylesheet' type="text/css">

    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet" type="text/css">

    <!-- Scripts -->
    @viteReactRefresh
    @vite(['resources/js/app.js'])

</head>

<body class="modal-open">
    <div class="overlay-contianer">

        <img class="overlay-bg" src="../img/G1.png" alt="image">
        <div id="app">
            <!-- ----------------------------NAVIGATION BAR---------------------------- -->
            <nav class="navbar navbar-expand-md">
                <div class="overlay-nav">
                    <button class="navbar-toggler my-2 ms-1 float-end me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse ms-1" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                            @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#login-modal">{{ __('Login') }}</a>
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
                                    <a class="dropdown-item" href="{{ url('/banghay') }}">Home</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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

            <!-- ----------------------------IMAGE-BUTTON OVERLAY---------------------------- -->

            <div class="overlay-img">
                <img class="logo" src="../img/HighResolutionLogo-TransparentBackground.png">
            </div>
            <div class="hero-overlay justify-content-center container pb-4">
                <h1 class="overlay-h1"><strong>FOR TEACHERS</strong></h1>
                <h1 class="overlay-h1 pb-3"><strong>BY TEACHERS</strong></h1>
                <a id="join" class="px-2 text-center" href="{{ route('register') }}">JOIN FREE</a>
            </div>


            <div class="container text-center error-overlay">
                @guest
                @if (Route::has('register'))
                @error('name')
                <div class="container">
                    <div class="alert alert-danger">{{ $message }}</div>
                </div>
                @enderror
                @error('email')
                <div class="container">
                    <div class="alert alert-danger">{{ $message }}</div>
                </div>
                @enderror
                @error('password')
                <div class="container">
                    <div class="alert alert-danger">{{ $message }}</div>
                </div>
                @enderror
                @endif

                @if (Route::has('login'))
                @error('name')
                <div class="container">
                    <div class="alert alert-danger">{{ $message }}</div>
                </div>
                @enderror
                @error('email')
                <div class="container">
                    <div class="alert alert-danger">{{ $message }}</div>
                </div>
                @enderror
                @error('password')
                <div class="container">
                    <div class="alert alert-danger">{{ $message }}</div>
                </div>
                @enderror
                @endif
                @endguest

            </div>

        </div>
    </div>

    <main class="home mt-5 py-4">
        @yield('content')
    </main>
    </div>

    <footer>
        <p>Copyright @ 2022</p>
        <p>Socials</p>
        <div class="container socials">
            <i class='bx bxl-facebook-square icon'></i>
            <i class='bx bxl-linkedin-square icon'></i>
            <i class='bx bxl-youtube icon'></i>
        </div>
    </footer>

    @yield('script')


</body>

</html>