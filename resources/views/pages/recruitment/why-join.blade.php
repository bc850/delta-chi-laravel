@extends('layouts.app')

@section('content')
  <div class="jumbotron jumbo-other-pages dx-nav-mt" style="background: url(https://s3.amazonaws.com/delta-chi/dx-vsu-1.jpg) no-repeat center center;">
    <h1 class="text-center" style="color: #fff;">Why Join Delta Chi</h1>
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
              <h4>Why Join a Fraternity</h4>
            </div>
            <div class="card-body">
              <p>
                There are many benefits to joining a fraternity and the Valdosta State Chapter of
                Delta Chi is an excellent option for those gentlemen looking to have a fun
                college experience, make friendships that will last a lifetime, enjoy the
                benefits of a robust alumni base, give back to the commuinty, and prepare for a
                successful and prosperous professional career.
              </p>
              <p>

              </p>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <h4>Why Join Delta Chi</h4>
            </div>
            <div class="card-body">
              <p>
                There are many benefits to joining a fraternity and the Valdosta State Chapter of
                Delta Chi is an excellent option for those gentlemen looking to have a fun
                college experience, make friendships that will last a lifetime, enjoy the
                benefits of a robust alumni base, give back to the commuinty, and prepare for a
                successful and prosperous professional career.
              </p>
              <p>

              </p>
            </div>
          </div>
        </div>
      </div>
      @include('includes.social-media-feeds')
    </div>
  </div>
@endsection
