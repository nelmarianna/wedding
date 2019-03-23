@extends('layouts.public')
@section('content')
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

<div class="container">

    @if(isset($details))
    <p> Please select your name below:</p>
    <table class="table table-striped">
        <tbody>

            @foreach($details as $guest)
            <tr>
               @if(count($guest)>3)
                <td>{{$guest->firstName}} {{$guest->lastName}}</td>
              @endif
              @if(count($guest[0])<=3)
                  <td>{{$guest->invitationName}}</td>
              @endif
            </tr>
            @endforeach

        </tbody>
    </table>
    @endif
      @if(!isset($details))
      Not set
      @endif

</div>
@endsection
