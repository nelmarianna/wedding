@extends('layouts.public')

@push('styles')
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endpush

@push('head')
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
@endpush

@section('content')
                
        <div id="top" class="content">
            <div class="title m-b-md">
                    <p>Aniela and Justin</p>
                    <p class="date">01&middot;06&middot;2019</p>
                    <p class="subtitle">Mississauga, ON</p>
                </div>   
            </div> 
        </div>
        <div id="Wedding" >
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