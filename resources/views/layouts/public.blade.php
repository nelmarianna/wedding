<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>A+J Forever <3 </title>


          <script src="{{ asset('js/bootstrap.js') }}" defer></script>
          <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" />
        <!-- Fonts -->

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script>

        <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.min.js"></script>
        <style>

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }

            .links > a {
                color: #1f5c7a;
                text-shadow: 0px 0px 30px rgba(255, 255, 255, 1);
                padding: 0 25px;
                font-size: 20px;
                font-weight: 500;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
        </style>
         @stack('styles')
    </head>
    @guest
    <body>
         <div class="flex-center position-ref full-height">
            <div class="top-left links">
                <a href="/">Home</a>
                <a href="#">Wedding</a>
                <a href="/public">Bridal Party</a>
                <a href="/accommodations">Accommodations</a>
                <a href="#">Photos </a>
                <a href="/rsvp">RSVP</a>
            </div>

                @yield('content')

    </body>
    @else
    @endguest
</html>
