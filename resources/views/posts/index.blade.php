@extends('layouts.app')

@section('content')
  <div class="container mt-3">
    <h2>Index for News & Posts</h2>
    @if(count($posts) > 0)
      <div class="row mt-3">
        @foreach($posts as $post)
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}}</small>
              </div>
              <div class="card-body">
                <p>{{$post->body}}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      <div class="row mt-3">
        <div class="col-md-12">
          {{$posts->links()}}
        </div>
      </div>
    @else
      <p>No posts found.</p>
    @endif
  </div>
@endsection
