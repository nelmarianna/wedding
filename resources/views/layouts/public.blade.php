<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Becoming Lapinski</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script>

        <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.min.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                
                background-image: url('/images/Aniela+Justin-3.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 0px -100px;
                /*color: #1f5c7a;*/
                /*color: #D4AF37;*/
                color:#f9e686;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;

                height: 100%;
                width: 100%;

            }

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

            .content {
                text-align: center;
                text-shadow: 1px 1px 10px rgba(12, 36, 48, 1);
                margin-top: 155px;
            }

            .title {
                font-size: 84px;
                font-family: 'Snell Roundhand', cursive;

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
            .title p{
                margin-bottom: 0px;
            }
            .date{
                font-size: 50px;
            }
            .subtitle{
                font-size: 20px;
                font-family: 'Nunito', sans-serif;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            canvas{
                position:absolute;
                bottom:0; right:0;
                z-index:1;
            }
        </style>
    </head>
    <body>
         <div class="flex-center position-ref full-height">
            <div class="top-left links">
                <a href="/">Home</a>
                <a href="#">Wedding</a>
                <a href="/our-story">Bridal Party</a>
                <a href="#">Registry</a>
                <a href="#">Photos </a>
                <a href="#">RSVP</a>
            </div>
    </body>
</html>