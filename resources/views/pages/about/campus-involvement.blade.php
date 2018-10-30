@extends('layouts.app')

@section('content')
  <div class="jumbotron dx-nav-mt" style="background: url(https://s3.amazonaws.com/delta-chi/home-jumbotron.jpg) no-repeat center center; width: 100%; height: 350px; top: 0; left: 0; border-radius: 0 !important;">
    <h1 class="text-center" style="color: #fff;">Campus Involvement</h1>
  </div>
  <div class="container py-4">
    <div class="row">
      <div class="col-md-8 mb-3">
        <div class="col-md-12" style="background-color: #fff; border: 1px solid #eee;">
          <div class="my-3">
            <img class="img-thumbnail" src="https://www.csparks.org/wp-content/uploads/2016/08/AdultSports-2016-A.jpg" style="width: 100%; height: auto;">
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <h4>Campus Involvement</h4>
            </div>
            <div class="card-body">
              <p class="card-text">
                Phi Mu Fraternity stays very involved in other College
                Panhellenic events. We love supporting other chapters in their
                philanthropic organizations and giving back to the Valdosta
                State community. We support other chapters in different ways by
                hosting events together, planning give back nights at restaurants,
                and even supporting one another in upcoming events or sports
                games. We strive to unify Greek life in a positive way.
              </p>
              <p class="card-text">
                We offer different leadership positions available for members of
                the Kappa Beta chapter. We hold ourselves to a high standard and
                want the best for our chapter every year.  Not only do we have
                the highest GPA at Valdosta State University for the 2015-2016
                school year, we also excel in community service opportunities.
              </p>
            </div>
          </div>
        </div>
      </div>
      @include('includes.social-media-feeds')
    </div>
  </div>
@endsection
