<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>



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
    <img class="overlay-bg" src="img/G1.png" alt="image">
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
        <img src="../img/HighResolutionLogo-TransparentBackground.png" alt="image">
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
    <div class="container">
      <div class="row footer__row1 mx-auto gap-2">
        <div class="col-md-3 footer__about">
          <h3 style="color: #0086DF;">About BANGHAY</h3>
          <div class="list-group">
            <a href="#" class="text-start">About BANGHAY</a>
            <a href="#">Careers</a>
            <a href="#">BANGHAY Social Impact</a>
            <a href="#">Affiliates</a>
            <a href="#">Suply Chain Transparency</a>
            <a href="#">Sitemap</a>
            <a href="#">BANGHAY Global Sites</a>
          </div>
        </div>
        <div class="col-md-3 footer__account">
          <h3 style="color: #0086DF;">Account</h3>
          <div class="list-group">
            <a href="#">My Account</a>
            <a href="#">Order Status</a>
            <a href="#">Favourites</a>
            <a href="#">Rewards</a>
            <a href="#">Flash Unlimited Shopping</a>
          </div>
        </div>
        <div class="col-md-3 footer__help">
          <h3 style="color: #0086DF;">Help and FAQs</h3>
          <div class="list-group">
            <a href="#">Online Ordering</a>
            <a href="#">Shipping</a>
            <a href="#">Billing</a>
            <a href="#">Returns and Exchanges</a>
            <a href="#">International Shipments</a>
            <a href="#">Customer Service</a>
            <a href="#">Contact Us</a>
          </div>
        </div>
        <div class="col-md-3 footer__shop">
          <h3 style="color: #0086DF;">Ways to Shop</h3>
          <div class="list-group">
            <a href="#">Just Arrived</a>
            <a href="#">Best Sellers</a>
            <a href="#">Featured Toys</a>
            <a href="#">Gift Cards</a>
          </div>
        </div>
      </div>
      <hr>
      <div class="row footer__row2">
        <div class="col-md-6">
          <div class="input-group input-group-sm mb-3">
            <span class="col-md-3 align-text-top f__signUP">Sign Up for BANGHAY Emails</span>
            <input type="text" class="form-control" placeholder="Email">
            <button class="btn btn-outline-secondary" type="button" id="button-addon1">Subscribe</button>
          </div>
        </div>
        <div class="col-md-6">
          <div class="float-end">
            <a href="#"><i class="bi bi-facebook me-2"></i></a>
            <a href="#"><i class="bi bi-twitter me-2"></i></a>
            <a href="#"><i class="bi bi-instagram me-2"></i></a>
            <a href="#"><i class="bi bi-youtube me-2"></i></a>
            <a href="#"><i class="bi bi-pinterest me-2"></i></a>
            <a href="#"><i class="bi bi-google me-2"></i></a>
            <a href="#"><i class="bi bi-tiktok me-2"></i></a>
            <a href="#"></a>
          </div>
        </div>
      </div>

      <div class="row footer__row3">
        <div class="col-md-12 text-center">
          <p>Copyright <span>&copy;</span> 2022 BANGHAY Inc. All rights reserved. <a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a></p>
          <span>1 877 BANGHAY (1 877 737 4672)| FTT (1 888 866 9645)</span>
        </div>
      </div>
    </div>
  </footer>

  <!--   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
 -->


</body>

</html>