@extends('layouts.public')

@push('styles')
    <link href="{{ secure_asset('css/party.css') }}" rel="stylesheet">
    <link href="{{ asset('css/party.css') }}" rel="stylesheet">
@endpush

@section('content')

  <div class="lower" >
        <h1>Meet The Team</h1>
        <p> We would love to dedicate this page to our amazing wedding party who helped put this whole wedding together. We are so grateful to have you in our lives. </p>
        <div class="right">
            <h3>Bridesmaids</h3>
            <!-- <div>
                <h4>Ophelia John</h4>
                <p>Maid of Honor</p>
                <p>Ophelia and Aniela met in the ninth grade. Went to University of Ottawa together and have been best friends for almost 10 years.</p>
                <p>"I have known Justin and Aniela as a couple since their beginning back in high school. Over the last few years I've seen them go to school dances together, start university together, play on sports teams together, get competitive playing board games and video games together and celebrate five anniversaries together. Every happy memory I have of them smiling and laughing and holding hands does not compare to when they announced their engagement. I was at work when she sent the message and when I saw it I spent the next few minutes squealing and disrupting my coworkers telling everyone around me that my best friend was getting married. When she sent the pictures I zoomed in and saw their faces. The way Justin looked at Aniela when he was on one knee was incredible. His face was filled with joy and certainty and so much love. Then I looked at Aniela's face and it was reflecting the same thing. I've seen them smile at each other but this was so different. I have never seen either of them look so happy! I am so happy that God had these two meet because I know in my heart they will have a beautiful life together. It has been so magical seeing the teenagers I knew four years ago grow up together and fall in love and I am so excited to see how they look at each other on their Wedding day and for the rest of their lives."
                </p>
            </div>
             <div>
                <h4>Jennifer Hasko</h4>
                <p>Bridesmaid</p>
                <p>Jennifer and Aniela met during their undergrad at the University of Ottawa. They have been roommates for over 2 years and best friends for longer.</p>
            </div>
             <div>
                <h4>Lauren Opolski</h4>
                <p>Bridesmaid</p>
                <p>Lauren is Aniela’s sister in law. They bonded over Twilight and Kelly Armstrong books. Lauren is an amazing event planner and mom extraordinaire.</p>
            </div> -->
        </div>
        <div class="left">
            <h3>Groomsmen</h3>
            <!-- <div class="groomsman">
                <h4>Kevin Picard</h4>
                <p>Best Man</p>
                <div class="right">
                  <p>Kevin and Justin met during their undergrad at the University of Ottawa through intramural sports. They have been friends for over 4 years.</p>
                  <p>"I'd say my favorite memory [with Justin and Aniela] is flag football when we won the championship with the multiple scorgasms."</p>
                </div>
                <div class="left">
                <img src="images/kevin.jpg" width="200px"/>
                </div>
            </div>
             <div class="groomsman">
                <h4>Kiril Perepiolkin</h4>
                <p>Groomsman</p>
                <div class="right">
                  <p>Kiril and Justin met in elementary school. They have been friends for more than X years.</p>
                </div>
                <div class="left">

                </div>
            </div>
             <div class="groomsman">
                <h4>Zackary Lapinski</h4>
                <p>Groomsman</p>
                <p></p>
            </div> -->
        </div>
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">James Opolski</h5>
            <h6 class="card-subtitle mb-2 text-muted">Ring Bearer</h6>
          <p class="card-text">James is Aniela’s nephew, son of Lauren and Paul Opolski.</p>
        </div>
      </div>

@endsection
