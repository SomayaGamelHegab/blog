@extends('partials.master')
@section('content')
@include('errors')
  <h1>Sign In</h1>

<form method="post" action="/login">
  {{csrf_field()}}

 <div class="form-group">
   <label for="email">Email:</label>
   <input type="email" class="form-control" id="email" name="email">
 </div>
 <div class="form-group">
   <label for="password">Password:</label>
   <input type="password" class="form-control" id="password" name="password">
 </div>

 <div class="checkbox">
   <label><input type="checkbox"> Remember me</label>
 </div>
 <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
