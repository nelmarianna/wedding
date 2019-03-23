@extends('layouts.app')

@section('content')
<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
  @endif
  <div>
    <!-- Message -->
    @if(Session::has('message'))
       <p >{{ Session::get('message') }}</p>
    @endif

    <!-- Form -->
    <form method='post' action='/uploadFile' enctype='multipart/form-data' >
      {{ csrf_field() }}
      <input type='file' name='file' >
      <input type='submit' name='submit' value='Import'>
    </form>
  </div>
</div>
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Guests</h1>
    <div>
      <a style="margin: 19px;" href="{{ route('guests.create')}}" class="btn btn-primary">New guest</a>
    </div>
    <table class="table table-striped">
      <thead>
          <tr>
            <td>ID</td>
            <td>Guest Name</td>
            <td>Phone</td>
            <td>RSVP</td>
            <td>Vegetarian</td>
            <td>Dietary Restrictions</td>
            <td colspan = 2>Actions</td>
          </tr>
      </thead>
      <tbody>
          @foreach($guests as $guest)
          <tr>
              <td>{{$guest->id}}</td>
              <td>{{$guest->firstName}} {{$guest->lastName}}</td>
              <td>{{$guest->phone}}</td>
              <td>{{$guest->response}}</td>
              <td>{{$guest->vegetarian}}</td>
              <td>{{$guest->otherDiet}}</td>
              <td>
                  <a href="{{ route('guests.edit',$guest->id)}}" class="btn btn-primary">Edit</a>
              </td>
              <td>
                  <form action="{{ route('guests.destroy', $guest->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
              </td>
          </tr>
          @endforeach
      </tbody>
    </table>
<div>
</div>
@endsection
