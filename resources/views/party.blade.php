@extends('layouts.public')

@push('styles')
    <link href="{{ asset('css/story-styles.css') }}" rel="stylesheet">
@endpush

@section('content')

        <div class="border">
            <div class="story"> 
                <h1>Meet Our Wedding Party!</h1>
                <p> We would love to dedicate this page to our amazing wedding party who helped put this whole wedding together. We are so grateful to have you in our lives. </p>
                <div class="right">
                    <h3>hmmm ladies?</h3>
                    <div>
                        <h4>Ophelia John</h4>
                        <p>Maid of Honor</p>
                        <p>Ophelia and Aniela met in the ninth grade. Went to University of Ottawa together and have been best friends for almost 10 years.</p>
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
                    </div>
                </div>
                <div class="left">
                    <h3>Gentlemen</h3>
                    <div>
                        <h4>Kevin Picard</h4>
                        <p>Best Man</p>
                        <p>Kevin and Justin met during their undergrad at the University of Ottawa through intramural sports. They have been friends for over 4 years.</p>
                        <p>"I'd say my favorite memory [with Justin and Aniela] is flag football when we won the championship with the multiple scorgasms."</p>
                        <img src="images/kevin.jpg"/>
                    </div>
                     <div>
                        <h4>Kiril Perepiolkin</h4>
                        <p>Groomsman</p>
                        <p>Kiril and Justin met in elementary school. They have been friends for more than X years.</p>
                    </div>
                     <div>
                        <h4>Zackary Lapinski</h4>
                        <p>Groomsman</p>
                        <p></p>
                    </div>
                    <div>
                        <h4>James Opolski</h4>
                        <p>Ring Bearer</p>
                        <p>James is Aniela’s nephew, son of Lauren and Paul Opolski.</p>
                        <p></p>
                    </div>
                </div>
                </div>
            </div>
        </div>
        
@endsection