@extends('layouts.app')

@section('content')
  <div class="container mt-3">
    <h2>Index for Posts</h2>
    @if(count($posts) > 1)
      <div class="row">
        @foreach($posts as $post)
          <div class="col-md-4">
            <div class="card">
              <div class="card-title">
                <h3>{{$post->title}}
              </div>
              <div class="card-body">
                <p>{{$post->body}}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    @else
      <p>No posts found.</p>
    @endif
  </div>
@endsection
