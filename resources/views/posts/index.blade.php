@extends('layouts.app')

@section('content')
  <div class="container dx-nav-mt mb-4">
    <div class="row">
      <div class="col-md-12 pt-4">
        <h2 class="text-center">Delta Chi News & Events</h2>
      </div>
    </div>
    <div class="row">
      @if(count($posts) > 0)
        <div class="row mt-3">
          @foreach($posts as $post)
            <div class="col-md-4">
              <div class="card">
                <div class="card-header">
                  <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                  <small>Written on {{$post->created_at}} by <b>{{$post->user->name}}</b></small>
                </div>
                <div class="card-body">
                  <p>{!!$post->body!!}</p>
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
  </div>
@endsection
