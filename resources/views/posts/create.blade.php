@extends('layouts.app')

@section('content')
  <h3 class="text-center">Create Blog</h3>
  {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
      {{Form::label('title','Title')}}
      {{Form::text('title','',['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>

    <div class="form-group">
      {{Form::label('description','Description')}}
      {{Form::text('description','',['class' => 'form-control', 'placeholder' => 'Add Description'])}}
    </div>

    <div class="form-group">
      {{Form::label('type','Category')}}
      {{Form::select('type', ['World' => 'World', 'U.S.' => 'U.S.', 'Technology' => 'Technology', 'Design' => 'Design'], null, ['class' => 'form-control','placeholder' => 'Select Category...'])}}
    </div>

    <div class="form-group">
      {{Form::label('body','Body')}}
      {{Form::textarea('body','',['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Blog Details'])}}
    </div>

    <div class="form-group">
      {{Form::file('cover_image')}}
    </div>

    {{Form::submit('Submit',['class' => 'btn btn-primary', 'style' => 'margin-bottom:30px;'])}}
  {!! Form::close() !!}
@endsection
