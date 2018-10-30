@extends('layouts.app')

@section('content')
  <div class="jumbotron jumbo-other-pages dx-nav-mt" style="background: url(https://s3.amazonaws.com/delta-chi/home-jumbotron.jpg) no-repeat center center;">
    <h1 class="text-center" style="color: #fff;">Letter From Recruitment Chair</h1>
  </div>
  <div class="container py-4">
    <div class="row">
      <div class="col-md-8 mb-3">
        <div class="col-md-12 dx-bg-white dx-border-eee">
          <div class="my-3">
            <img class="img-thumbnail image-full-w" src="https://s3.amazonaws.com/delta-chi/dx-coin.png">
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <h4>Welcome!</h4>
            </div>
            <div class="card-body">
              <p class="card-text">
                Welcome to the website for the Valdosta State chapter of Delta Chi!
                Congratulations on your decision to become a Blazer!
                We at Delta Chi are glad that you are considering Fall Recruitment
                and have an interest in seeing all that Greek Life has to offer.
              </p>
              <p>
                Here at Valdosta State University, Delta Chi has a reputation
                of academic excellence, outstanding campus involvement, and a rich
                winning tradition. We strive to uphold the purposes on which our
                fraternity was founded:
                to <b>promote</b> friendship, <b>develop</b> character, <b>advance</b>
                justice, and <b>assist</b> in the aquisition of a sound education.
                It is our actions that make Delta Chi. We take great pride in
                going above and beyond to make the most of our time here at VSU.
              </p>
              <p>
                As a Delta Chi, you will leave college with countless memories, a
                foundation for leadership, and friendships that will last a
                lifetime! Additionally, you will join a network of brothers that
                makes up one of the largest Men's Greek organizations in the
                nation. We welcome you to view the rest of our website and hope
                that you will get a closer look into the brotherhood that Delta Chi
                shares. We hope to see you in the fall! For any questions about
                recruitment, please don't hesitate to email me at
                recruitment@deltachivsu.org
              </p>
              <p>
                Brandon Corbett, Class of 2002
              </p>
            </div>
          </div>
          <div class="my-3">
            <img class="img-thumbnail image-full-w" src="https://s3.amazonaws.com/delta-chi/dchi-50th-24.jpg">
          </div>
        </div>
      </div>
      @include('includes.social-media-feeds')
    </div>
  </div>
@endsection
