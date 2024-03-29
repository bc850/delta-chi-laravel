@extends('layouts.app')

@section('content')
  <div class="container mt-3">
    <div class="col-md-12">
      <h2>Edit Post</h2>
      {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
        <div class="form-group">
          {{Form::label('title', 'Title')}}
          {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
          {{Form::label('blurb', 'Blurb')}}
          {{Form::text('blurb', $post->blurb, ['class' => 'form-control', 'placeholder' => 'Blurb'])}}
        </div>
        <div class="form-group">
          {{Form::label('body', 'Body')}}
          {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
          {{Form::label('image_url', 'Image URL')}}
          {{Form::text('image_url', $post->image_url, ['class' => 'form-control', 'placeholder' => 'Image URL'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-success btn-block'])}}
        <br>
        <a href="/posts/{{$post->id}}" class="btn btn-primary">Back to Posts</a>
        <a href="/dashboard" class="btn btn-secondary">Back to Dashboard</a>
      {!! Form::close() !!}
    </div>
  </div>
@endsection
