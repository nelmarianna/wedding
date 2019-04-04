  @extends('layouts.app')
  @push('styles')
      <link href="{{ secure_asset('css/edit.css') }}" rel="stylesheet">
  @endpush

  @section('content')
  <div class="container">
      <div class="col-6 center" >
          <h1>RSVP</h1>

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
              <div class="form-group input-group">
                  <label class="input-group-text" for="firstName">First Name:</label>
                  <input type="text" class="form-control" name="firstName" value={{ $guest->firstName }} />
              </div>

              <div class="form-group input-group">
                  <label class="input-group-text" for="lastName">Last Name:</label>
                  <input type="text" class="form-control" name="lastName" value={{ $guest->lastName }} />
              </div>

              <div class="form-group input-group">
                  <label class="input-group-text"  for="phone">Phone:</label>
                  <input type="text" class="form-control" name="phone" value={{ $guest->phone }} />
              </div>
              <div class="form-group input-group rsvp">
                  <label class="input-group-text">Response:</label>
                  <div class="custom-control custom-radio custom-control-inline form-control">
                        <input type="radio" id="yes" name="response" class="custom-control-input"  value="1">
                        <label class="custom-control-label" for="yes">Accept</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline form-control">
                    <input type="radio" id="no" name="response" class="custom-control-input" value="-1">
                    <label class="custom-control-label" for="no">Decline</label>
                  </div>
              </div>
              <div class="form-group input-group">
                <div class="custom-control custom-checkbox form-control">
                  <input type="checkbox" class="custom-control-input" id="vegetarian"  value={{ $guest->vegetarian }} >
                  <label class="custom-control-label" for="vegetarian">Vegetarian</label>
                </div>
              </div>
              <div class="form-group input-group">
                  <label class="input-group-text"  for="otherDiet">Other dietary Restrictions:</label>
                  <input type="text" class="form-control" name="otherDiet" value={{ $guest->otherDiet }} />
              </div>

              <div class="form-group">
                  <label for="plusOne">Plus One:</label>
                  <input type="checkbox" class="form-control" name="plusOne" value={{ $guest->plusOne }} />
              </div>

              <button type="submit" class="btn btn-primary">Save</button>
          </form>
      </div>
  </div>

  <script type="text/javascript">
  var rsvp = {{ $guest->response }};
    $('input[type=radio][value='+rsvp+']').prop('checked', true);
  </script>
  @endsection
