@extends('layouts.app')

@section('content')

<div class="container">
  <a href="/form" class="btn btn-primary">Add Employ</a>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($employs as $employ)
      <tr>
        <td>{{$employ->name}}</td>
        <td>{{$employ->lastname}}</td>
        <td>{{$employ->email}}</td>
        <td><a href="/delete/{{$employ->id}}" class="btn btn-primary">Delete</a>|
           <a href="/edit/{{$employ->id}}" class="btn btn-primary">Edit</a>
         </td>
      </tr>
      @endforeach


    </tbody>
  </table>
</div>
@endsection
