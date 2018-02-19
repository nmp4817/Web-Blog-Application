@extends('layouts.app')

@section('content')
  <h3 class="text-center">Posts</h3>
  @if(count($posts) > 0)
      <div class="row mb-2">
        @foreach ($posts as $post)
          <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary">World</strong>
                <h3 class="mb-0">
                  <a class="text-dark" href="/posts/{{$post->id}}">{{$post->title}}</a>
                </h3>
                <div class="mb-1 text-muted">{{$post->created_at}}</div>
                <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                <a href="/posts/{{$post->id}}">Continue reading</a>
              </div>
             <img class="card-img-right flex-auto d-none d-md-block" data-src="blog_picture_b2bsocialmediaguide.jpeg" alt="Card image cap">
           </div>
         </div>
       @endforeach
     </div>
     {{$posts->links()}}
  @else
    <p>No Post Found!</p>
  @endif
@endsection