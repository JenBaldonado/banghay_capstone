<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- CSS -->
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{asset('https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css')}}" rel='stylesheet' type="text/css">
    <link href="{{asset('css/grdlvl.css')}}" rel="stylesheet" type="text/css">

    <!-- Scripts -->
    @viteReactRefresh
    @vite(['resources/js/app.js'])

</head>

<body class="modal-open">
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <span class="image">
                        <img class="subject-bg" src="/img/HighResolutionLogo-TransparentBackground.png" alt="image">
                    </span>
                    <div class="text logo-text">
                        <span class="name">{{ config('app.name', 'Laravel') }}</span>
                </a>
            </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="link">
                        <a href="#English">
                            <i class='bx bx-book icon'></i>
                            <span class="text nav-text">English</span>
                        </a>
                    </li>

                    <li class="link">
                        <a href="#Math">
                            <i class='bx bx-math icon'></i>
                            <span class="text nav-text">Math</span>
                        </a>
                    </li>

                    <li class="link">
                        <a href="#Science">
                            <i class='bx bx-atom icon'></i>
                            <span class="text nav-text">Science</span>
                        </a>
                    </li>

                    <li class="link">
                        <a href="#ESP">
                            <i class='bx bx-street-view icon'></i>
                            <span class="text nav-text">ESP</span>
                        </a>
                    </li>

                    <li class="link">
                        <a href="#AP">
                            <i class='bx bx-globe icon'></i>
                            <span class="text nav-text">Araling Panlipunan</span>
                        </a>
                    </li>

                    <li class="link">
                        <a href="#Computer">
                            <i class='bx bx-desktop icon'></i>
                            <span class="text nav-text">Computer</span>
                        </a>
                    </li>

                    <li class="link">
                        <a href="#TLE">
                            <i class='bx bx-wallet icon'></i>
                            <span class="text nav-text">TLE</span>
                        </a>
                    </li>

                    <li class="link">
                        <a href="#Music">
                            <i class='bx bx-music icon'></i>
                            <span class="text nav-text">Music</span>
                        </a>
                    </li>

                    <li class="link">
                        <a href="#Arts">
                            <i class='bx bx-palette icon'></i>
                            <span class="text nav-text">Arts</span>
                        </a>
                    </li>

                    <li class="link">
                        <a href="#PE">
                            <i class='bx bx-dumbbell icon'></i>
                            <span class="text nav-text">Physical Education</span>
                        </a>
                    </li>

                    <li class="link">
                        <a href="#Health">
                            <i class='bx bx-heart icon'></i>
                            <span class="text nav-text">Health</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>

    </nav>

    <main class="home">
        @yield('content')

        <footer>
    <div class="container">
      <div class="row footer__row1">
        <div class="col-md-3 pb-3 footer__about">
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
        <div class="col-md-3 pb-3 footer__account">
          <h3 style="color: #0086DF;">Account</h3>
          <div class="list-group">
            <a href="#">My Account</a>
            <a href="#">Order Status</a>
            <a href="#">Favourites</a>
            <a href="#">Rewards</a>
            <a href="#">Flash Unlimited Shopping</a>
          </div>
        </div>
        <div class="col-md-3 pb-3 footer__help">
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
        <div class="col-md-3 pb-3 footer__shop">
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
    </main>




<!--     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
 -->
    <script>
        const body = document.querySelector('body'),
            toggle = body.querySelector(".toggle"),
            modeText = body.querySelector(".mode-text");

        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        })

        searchBtn.addEventListener("click", () => {
            sidebar.classList.remove("close");
        })
    </script>


</body>

</html>