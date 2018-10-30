@extends('layouts.app')

@section('content')
  <div class="jumbotron jumbo-other-pages dx-nav-mt" style="background: url(https://s3.amazonaws.com/delta-chi/dx-vsu-1.jpg) no-repeat center center;">
    <h1 class="text-center" style="color: #fff;">Scholarship</h1>
  </div>
  <div class="container py-4">
    <div class="row">
      <div class="col-md-8 mb-3">
        <div class="col-md-12 dx-bg-white dx-border-eee">
          <div class="my-3">
            <img class="img-thumbnail image-full-w" src="https://s3.amazonaws.com/delta-chi/dchi-cornerstone.JPG">
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <h4>Academic Excellence</h4>
            </div>
            <div class="card-body">
              <p class="card-text">
                A U.S. Government study has shown that 70% of all students who
                join a Greek organization on campus graduate. This is in contrast
                to all of the students who decide not to join a Greek organization
                which resulted in a 50% graduation rate. Many attribute this
                statistic to the camaraderie and accountability that Greek
                organization members are held to during their college years.
              </p>
              <p class="card-text">
                One of Delta Chi's values is the belief in the acquisition of a
                sound education. The reason you chose to go to college was to
                get an education, and Delta Chi has consistently helped to make
                that happen. Whether it is forming study groups, mentoring from
                upperclassmen, or exchanging note files, Delta Chi can provide
                the support network that you need. Success breeds success.
              </p>
              <p class="card-text">
                Locally, we have implemented an academic excellence program that
                is not only designed to ensure that members are making good
                grades but reward members for their outstanding grades. Members
                are encouraged to turn in their grades to the Academic Chairman
                every month. Members who have submitted excellent grades are
                selected from a drawing to receive a reward that varies from
                month to month. Members with excellent grades are also recognized
                at the beginning of each semester and at Delta Chi parents
                weekend in front of all their family and friends.
              </p>
            </div>
          </div>
        </div>
      </div>
      @include('includes.social-media-feeds')
    </div>
  </div>
@endsection
