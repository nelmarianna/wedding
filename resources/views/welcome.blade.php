@extends('layouts.public')

@push('styles')
    <link href="{{ secure_asset('css/welcome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endpush

@push('head')
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
@endpush

@section('content')

        <div id="top" class="content">
            <div class="title m-b-md">
                    <h1>Aniela and Justin</h1>
                    <h3 class="date">June 1st, 2019</h3>
                    <h5 class="subtitle">Mississauga, ON</h5>
                </div>
            </div>
        </div>
        <div id="Wedding" >
          <div class="container">
            <h1>The Ceremony</h1>
            <p>The ceremony will begin at 1pm.</p>
            <div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9725.304624821656!2d-79.71843622710121!3d43.557582005768985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b421e2094996f%3A0xd2e85f1eac6ec1a4!2sMerciful+Redeemer+Parish!5e0!3m2!1sen!2sca!4v1553964082234!5m2!1sen!2sca" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <h1>The Reception</h1>
            <p>Cocktail hour begins at 4:30 PM</p>
            <a href="/rsvp" >RSVP</a>
            <div>
              <iframe src="https://www.google.com/maps/d/u/0/embed?mid=15XrEvrIwXkrCaMp6cRn0GKPkEvqgG2ks" width="640" height="480"></iframe>
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
                this.canvas.height = (window.innerHeight/2)-60;
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

        <script>
          AOS.init();
        </script>

@endsection
