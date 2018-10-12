@extends('layouts.app')

@section('content')
  <div class="container mt-3">
    <div class="col-md-8 offset-md-2 text-center">
      <div class="card">
        <div class="card-header">
          <h2>{{$post->title}}</h2>
          <small>Written on {{$post->created_at}}</small>
        </div>
        <div class="card-body">
          <p>{!!$post->body!!}</p>
        </div>
        <div class="card-footer">
          <a href="/posts" class="btn btn-default">Back</a>
          <a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>
        </div>
      </div>
    </div>
  </div>
@endsection
