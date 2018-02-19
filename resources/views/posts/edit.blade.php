@extends('layouts.app')

@section('content')
  <h3 class="text-center">Edit Post</h3>
  {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
    <div class="form-group">
      {{Form::label('title','Title')}}
      {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>

    <div class="form-group">
      {{Form::label('description','Description')}}
      {{Form::text('description',$post->description,['class' => 'form-control', 'placeholder' => 'Add Description'])}}
    </div>

    <div class="form-group">
      {{Form::label('type','Category')}}
      {{Form::select('type', ['World' => 'World', 'U.S.' => 'U.S.', 'Technology' => 'Technology', 'Design' => 'Design'], $post->type, ['class' => 'form-control','placeholder' => 'Select Category...'])}}
    </div>

    <div class="form-group">
      {{Form::label('body','Body')}}
      {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Post Details'])}}
    </div>

    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit',['class' => 'btn btn-primary', 'style' => 'margin-bottom:30px;'])}}
  {!! Form::close() !!}
@endsection
