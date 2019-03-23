@extends('layouts.app')

@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a guest</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('guests.store') }}">
          @csrf
          <div class="form-group">
              <label for="firstName">First Name:</label>
              <input type="text" class="form-control" name="firstName"/>
          </div>

          <div class="form-group">
              <label for="lastName">Last Name:</label>
              <input type="text" class="form-control" name="lastName"/>
          </div>
          <button type="submit" class="btn btn-primary-outline">Add guests</button>
      </form>
  </div>
</div>
</div>
@endsection
