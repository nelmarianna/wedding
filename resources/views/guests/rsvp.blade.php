@extends('layouts.public')
@push('styles')
    <link href="{{ secure_asset('css/rsvp.css') }}" rel="stylesheet">
      <link href="{{ asset('css/rsvp.css') }}" rel="stylesheet">
@endpush
@section('content')

<div class="page">
<div class="container">
      @if(isset($success))
        <div class="alert alert-success">
           {{$success}} testing
        </div>

      @endif
<form action="/rsvp" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder="Search for your name"> <span class="input-group-btn">
            <button type="submit" class="btn btn-light btn-default">
            Search
            </button>
        </span>
    </div>
</form>

    <div id="list">
        @if(isset($details))
        <table class="table table-striped table-light">
            <tbody>

                @foreach($details as $guest)
                <tr>
                  @if(isset($guest->firstName))
                  <td>{{$guest->firstName}} {{$guest->lastName}}</td>
                  <td><a href="{{ route('guests.edit',$guest->id)}}" class="btn btn-outline-dark">Select</a></td>
                  @endif


                </tr>
                @endforeach

            </tbody>
        </table>
        @endif
    </div>
</div>
</div>
@endsection
