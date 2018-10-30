@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="col-md-4 my-3">
      <div class="card" style="width: 100%; height: 400px !important;">
        <div class="card-block">
          <h4 class="card-title ml-3 mt-2" style="font-size: 20px !important;">
            <b>Navigation</b>
          </h4>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <a class="nav-link" href="/dashboard">Home</a>
          </li>
          <li class="list-group-item">
            <a class="nav-link" href="/dashboard/posts">Posts</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
@endsection
