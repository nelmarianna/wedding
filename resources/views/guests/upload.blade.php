@extends('layouts.app')

@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Upload Guest list</h1>
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
</div>
@endsection
