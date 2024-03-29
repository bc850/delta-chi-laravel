@extends('layouts.app')

@section('content')
  <div class="container mt-3">
    <div class="col-md-12">
      <h2>Create Post</h2>
      {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
          {{Form::label('title', 'Title')}}
          {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
          {{Form::label('blurb', 'Blurb')}}
          {{Form::text('blurb', '', ['class' => 'form-control', 'placeholder' => 'Blurb'])}}
        </div>
        <div class="form-group">
          {{Form::label('body', 'Body')}}
          {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
          {{Form::label('image_url', 'Image URL')}}
          {{Form::text('image_url', '', ['class' => 'form-control', 'placeholder' => 'Image URL'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
      {!! Form::close() !!}
    </div>
  </div>
@endsection
