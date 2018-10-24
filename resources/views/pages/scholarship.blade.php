@extends('layouts.app')

@section('content')
  <div class="jumbotron" style="background: url(https://s3.amazonaws.com/delta-chi/home-jumbotron.jpg) no-repeat center center; width: 100%; height: 350px; top: 0; left: 0; border-radius: 0 !important;">
    <h1 class="text-center" style="color: #fff;">Scholarship</h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-8 py-3 mb-4" style="background-color: #fff; border: 1px solid #eee;">
        <div class="col-md-12">
          <div class="my-3">
            <img class="img-thumbnail" src="https://www.rockhall.com/sites/default/files/styles/header_image_portrait/public/pinkfloyd_001a-crop.jpg?itok=No19pcnQ" style="width: 100%; height: auto;">
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
      <div class="col-md-4">
        <div class="col-md-12" style="background-color: #fff; border: 1px solid #eee;">
          <a class="twitter-timeline" data-height="450" href="https://twitter.com/VSUDeltaChi?ref_src=twsrc%5Etfw">Tweets by VSUDeltaChi</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <div class="col-md-12 mt-3" style="background-color: #fff; border: 1px solid #eee;">
          <a class="twitter-timeline" data-height="450" href="https://twitter.com/DeltaChiHQ?ref_src=twsrc%5Etfw">Tweets by DeltaChiHQ</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
      </div>
    </div>
  </div>
@endsection
