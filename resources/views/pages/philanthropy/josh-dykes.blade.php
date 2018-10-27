@extends('layouts.app')

@section('content')
  <div class="jumbotron" style="background: url(https://s3.amazonaws.com/delta-chi/home-jumbotron.jpg) no-repeat center center; width: 100%; height: 350px; top: 0; left: 0; border-radius: 0 !important;">
    <h1 class="text-center" style="color: #fff;">Josh Dykes Memorial Golf Tournament</h1>
  </div>
  <div class="container py-4">
    <div class="row">
      <div class="col-md-8 mb-3">
        <div class="col-md-12" style="background-color: #fff; border: 1px solid #eee;">
          <div class="my-3">
            <img class="img-thumbnail" src="https://s3.amazonaws.com/delta-chi/dchi-cornerstone.JPG" style="width: 100%; height: auto;">
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <h4>Academic Excellence</h4>
            </div>
            <div class="card-body">
              <p class="card-text">
                Something here.
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
