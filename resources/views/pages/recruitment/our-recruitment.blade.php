@extends('layouts.app')

@section('content')
  <div class="jumbotron jumbo-other-pages dx-nav-mt" style="background: url(https://s3.amazonaws.com/delta-chi/dx-vsu-1.jpg) no-repeat center center;">
    <h1 class="text-center" style="color: #fff;">Our Recruitment</h1>
  </div>
  <div class="container py-4">
    <div class="row">
      <div class="col-md-8 mb-3">
        <div class="col-md-12 dx-bg-white dx-border-eee">
          <div class="my-3">
            <img class="img-thumbnail image-full-w" src="https://s3.amazonaws.com/delta-chi/dchi-usable-6.jpg">
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <h4>Recruitment Information</h4>
            </div>
            <div class="card-body">
              <p class="card-text">
                Stay tuned for more information when it becomes available from
                VSU.
              </p>
            </div>
          </div>
        </div>
      </div>
      @include('includes.social-media-feeds')
    </div>
  </div>
@endsection
