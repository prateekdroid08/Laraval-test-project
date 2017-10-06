@extends('layouts.app')

@section('content')
<div class="container">


  <form class="form-inline" action="/form/submit" method="post">
     {{ csrf_field() }}
     <input type="hidden" name="id" id="id" value="@if(isset($employ)){{$employ->id}}@endif">
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter email" name="name" value="@if(isset($employ)){{$employ->name}}@endif">
    </div>
    <div class="form-group">
      <label for="pwd">LastName:</label>
      <input type="text" class="form-control" id="lastname" placeholder="Enter Lastnamr" name="lastname" value="@if(isset($employ)){{$employ->lastname}}@endif">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="@if(isset($employ)){{$employ->email}}@endif">
    </div>
    <div class="form-group">
      <label for="email">Department:</label>
      <input type="text" class="form-control" id="departmeant" placeholder="Departmeant" name="departmeant" value="@if(isset($employ)){{$employ->departmeant}}@endif">
    </div>


    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

@endsection
