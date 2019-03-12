@extends('layouts.public')

@push('styles')
    <link href="{{ asset('css/accommodations.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="border float-left">
	<div class="story">
		<h1>Accommodations For Guests:</h1>
		<p>For your convenience we have booked blocks of rooms for our guests at the following two hotels near the reception venue in Milton.</p>
		<h2>Best Western Milton</h2>
		<p><b>Block Rate Name:</b> The Opolski and Lapinski Wedding</p>
		<p><b>Address:</b> 161 Chisholm Dr, Milton, ON L9T 4A6</p>
		<p><b>Telephone Number:</b> (905) 875-3818 </p>
		<p><b>Block Pricing:</b> $120-165 plus 13% tax, prices vary based on room type.</p>
		<p>We have reserved 20 rooms in this block, reservations are on a first come first served basis.</p>
		<p>Reservations can be made until <strong><u>May 1st, 2019</u></strong>.</p>
		
		<h2>Holiday Inn Express</h2>
		<p><b>Block Rate Name:</b> Aniela Opolski and Justin Lapinski Wedding Group</p>
		<p><b>Address:</b> 2750 High Point Drive, Milton ON, L9T 5G5</p>
		<p><b>Telephone Number:</b> (905) 876-4955 </p>
		<p><b>Block Pricing:</b> $134.99 plus HST </p>
		<p>We have reserved 20 rooms in this block, reservations are on a first come first served basis.</p>
		<p>Reservations can be made until <strong><u>May 10th, 2019</u></strong>.</p>
		
	</div>
</div>
@endsection