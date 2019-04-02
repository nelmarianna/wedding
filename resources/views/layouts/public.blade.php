<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>A+J Forever <3 </title>


          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
            /* .links{
               background-color:rgba(255, 255, 255, 0.1);
            } */
           #navbar{
           height:45px;
            padding-bottom:5px;
            }
            #navbar a {
                color: #1f5c7a !important;
                text-shadow: 0px 0px 30px rgba(255, 255, 255, 1);
                padding: 0 25px;
                font-size: 18px;
                font-weight: 500;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;

            }
            #navbar a:hover {
              color: #2c86b2 !important;
              }
            #navbar a.active {
              color: #2c86b2 !important;
            }


        </style>
         @stack('styles')
    </head>
    @guest
    <body>

      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse fixed-top" id="navbar">
          <div class="navbar-nav">
            <a class="nav-item nav-link" href="/">Home<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#Wedding">Wedding</a>
            <!-- <a class="nav-item nav-link" href="/party">Bridal Party</a> -->
            <a class="nav-item nav-link" href="/accommodations">Accommodations</a>
            <a class="nav-item nav-link" href="/rsvp">RSVP</a>
          </div>
        </div>
      </nav>

                @yield('content')

    </body>
    @else
    @endguest

    <script type="text/javascript">
    $('.nav-item').onclick(function(this){
      $('.nav-item .active').removeclass('active');
      $(this).addClass('active');
    });


    });
    </script>
</html>
