@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a guest</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <form method="post" action="{{ route('guests.update', $guest->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">

                <label for="firstName">First Name:</label>
                <input type="text" class="form-control" name="firstName" value={{ $guest->firstName }} />
            </div>

            <div class="form-group">
                <label for="lastName">Last Name:</label>
                <input type="text" class="form-control" name="lastName" value={{ $guest->lastName }} />
            </div>

            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" name="phone" value={{ $guest->phone }} />
            </div>
            <div class="form-group">
                <label for="response">RSVP:</label>
                <input type="radio" class="form-control" name="response" value="1"> Accept
                <input type="radio" class="form-control" name="response" value="-1" > Decline
            </div>
            <div class="form-group">
                <label for="vegetarian">Vegetarian:</label>
                <input type="checkbox" class="form-control" name="vegetarian" value={{ $guest->vegetarian }} />
            </div>
            <div class="form-group">
                <label for="otherDiet">Other dietary Restrictions:</label>
                <input type="text" class="form-control" name="otherDiet" value={{ $guest->otherDiet }} />
            </div>
            <div class="form-group">
                <label for="plusOne">Plus One:</label>
                <input type="checkbox" class="form-control" name="plusOne" value={{ $guest->plusOne }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

<script type="text/javascript">
var rsvp = {{ $guest->response }};
  $('input[type=radio][value='+rsvp+']').prop('checked', true);
</script>
@endsection
