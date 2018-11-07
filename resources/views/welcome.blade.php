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
                
                background-image: url('/images/rustic-background.jpg');
                color: #1f5c7a;
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
                text-shadow: 0px 0px 30px rgba(255, 255, 255, 1);
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
                <a href="#">Home</a>
                <a href="#">Photos</a>
                <a href="#">Details</a>
                <a href="#">Registry</a>
                <a href="#">RSVP</a>
            </div>

                
            <div class="content">
                <div class="title m-b-md">
                    <p>Save the Date!</p>
                    <p class="date">01&middot;06&middot;2019</p>
                    <p class="subtitle">Mississauga, ON</p>
                </div>   
            </div> 
        </div>

        <canvas id="canvas"></canvas>

        <script type="text/javascript">
            var heartsAnimation = {
                heartHeight: 50,
                heartWidth: 80,
                hearts: [],
                heartImage: '/images/heart.png',
                maxHearts: 30,
                minScale: 0.4,
              draw: function() {
                this.setCanvasSize();
                this.ctx.clearRect(0, 0, this.w, this.h);
                for (var i = 0; i < this.hearts.length; i++) {
                  var heart = this.hearts[i];
                  heart.image = new Image();
                  heart.image.style.height = heart.height;
                  heart.image.src = this.heartImage;
                  this.ctx.globalAlpha = heart.opacity;
                  this.ctx.drawImage (heart.image, heart.x, heart.y, heart.width, heart.height);
                }
                this.move();
              },
              move: function() {
                for(var b = 0; b < this.hearts.length; b++) {
                  var heart = this.hearts[b];
                  heart.y += heart.ys;
                  if(heart.y > this.h) {
                    heart.x = Math.random() * this.w;
                    heart.y = -1 * this.heartHeight;
                  }
                }
              },
              setCanvasSize: function() {
                this.canvas.width = window.innerWidth;
                this.canvas.height = (window.innerHeight/2)+20;
                this.w = this.canvas.width;
                this.h = this.canvas.height;

              },
              initialize: function() {
                this.canvas = $('#canvas')[0];

                if(!this.canvas.getContext)
                  return;

                this.setCanvasSize();
                this.ctx = this.canvas.getContext('2d');

                for(var a = 0; a < this.maxHearts; a++) {
                  var scale = (Math.random() * (1 - this.minScale)) + this.minScale;
                  this.hearts.push({
                    x: Math.random() * this.w,
                    y: Math.random() * this.h,
                    ys: Math.random() + 1,
                    height: scale * this.heartHeight,
                    width: scale * this.heartWidth,
                    opacity: scale
                  });
                }

                setInterval($.proxy(this.draw, this), 60);
              }
            };

        $(document).ready(function(){
          heartsAnimation.initialize();
        });
        </script>
        
    </body>
</html>
