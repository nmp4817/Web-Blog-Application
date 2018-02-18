@extends('layouts.app')

@section('content')
  <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">{{$title}}</h1>
      <p class="lead my-3">A place for informing new readers quickly and efficiently about what's most interesting in this world.</p>
      <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div>
  </div>
@endsection
