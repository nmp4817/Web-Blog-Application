@extends('layouts.app')

@section('content')
  <h3 class="text-center">Dashboard</h3>
  {{-- @if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
  @endif

  You are logged in! --}}

  @if(count($posts) > 0)
      <div class="row mb-2">
        @foreach ($posts as $post)
          <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary">{{$post->type}}</strong>
                <h3 class="mb-0">
                  <a class="text-dark" href="/posts/{{$post->id}}">{{$post->title}}</a>
                </h3>
                <div class="mb-1 text-muted">{{$post->created_at}} by {{$post->user->name}}</div>
                <p class="card-text mb-auto">{{$post->description}}</p>
                <a href="/posts/{{$post->id}}">Continue reading</a>
              </div>
             <img class="card-img-right flex-auto d-none d-md-block" data-src="blog_picture_b2bsocialmediaguide.jpeg" alt="Card image cap">
           </div>
         </div>
       @endforeach
     </div>
  @else
    <p>No Post Found!</p>
  @endif
@endsection
