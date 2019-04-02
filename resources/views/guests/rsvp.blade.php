@extends('layouts.public')
@push('styles')
    <link href="{{ secure_asset('css/rsvp.css') }}" rel="stylesheet">
      <link href="{{ asset('css/rsvp.css') }}" rel="stylesheet">
@endpush
@section('content')

<div class="page">
<div class="container">
<form action="/rsvp" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder="Search for your name"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
            Search
            </button>
        </span>
    </div>
</form>

    @if(isset($details))
    <p> Please select your name below:</p>
    <table class="table table-striped">
        <tbody>

            @foreach($details as $guest)
            <tr>
              @if(isset($guest->invitationName))
              <td>{{$guest->invitationName}}</td>

              @elseif(isset($guest->firstName))
              <td>{{$guest->firstName}} {{$guest->lastName}}</td>
              <td><a href="{{ route('guests.edit',$guest->id)}}" class="btn btn-default">Select</a></td>
              @endif


            </tr>
            @endforeach

        </tbody>
    </table>
    @endif

</div>
</div>
@endsection
