<doctype html>
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

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;600&family=Poppins&display=swap');

            .card {
                background-color: rgba(101, 165, 207, 0.90);
                box-shadow: 1px -1px 12px 0 rgba(58, 59, 69);
                color: #f1f1f1;
                /* top: 15em; */
                z-index: 1;
            }

            .container {
                align-items: center;
                margin: auto;
            }

            body {
                font-family: "Oswald", sans-serif;
                justify-content: center;
                align-items: center;
                /*  background:rgba(101, 165, 207, 0.75); */
                margin-top: 0;

            }

            .logo {
                width: 15em;
                height: 15em;
                z-index: 1;
            }

            a {
                text-decoration: none;
            }

            .overlay-bg {
                width: 100%;
                height: 100%;
                object-fit:cover;
                position: fixed;
                z-index: -1;
                margin: 0;
                top:0;

            }
        </style>
        <!-- Scripts -->
        @viteReactRefresh

        @vite(['resources/js/app.js'])

    </head>

    <body>

        <img class="overlay-bg" src="../img/G1.png" alt="image">

        <div class="text-center mt-5">
            <img class="logo" src="../img/HighResolutionLogo-TransparentBackground.png">
        </div>


        <main class="home py-4">
            @yield('content')
        </main>


    </body>

    </html>