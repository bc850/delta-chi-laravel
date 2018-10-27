@extends('layouts.app')

@section('content')
  <div class="jumbotron" style="background: url(https://s3.amazonaws.com/delta-chi/home-jumbotron.jpg) no-repeat center center; width: 100%; height: 350px; top: 0; left: 0; border-radius: 0 !important;">
    <h1 class="text-center" style="color: #fff;">The V Foundation for Cancer Research</h1>
  </div>
  <div class="container py-4">
    <div class="row">
      <div class="col-md-8 mb-3">
        <div class="col-md-12" style="background-color: #fff; border: 1px solid #eee;">
          <div class="my-3">
            <img class="img-thumbnail" src="https://s3.amazonaws.com/delta-chi/dch-v-foundation.jpg" style="width: 100%; height: auto;">
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <h4>Delta Chi's National Philanthropy</h4>
            </div>
            <div class="card-body">
              <p class="card-text">
                As of 2006, undergraduate and alumnus members of Delta Chi have
                joined hands in fighting cancer together with The V Foundation
                for Cancer Research. Each year, our chapters and colonies host
                various fundraising events and educate their members and campus
                communities on the importance of philanthropic giving to cancer
                research. Our strong partnership with The V Foundation allows
                each donor to make a greater impact on finding cures for cancer
                than he or she could ever do on his or her own.
              </p>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <h4>What is the V Foundation?</h4>
            </div>
            <div class="card-body">
              <p class="card-text">
                The V Foundation, named in honor of former basketball coach and
                cancer victim Jim Valvano, was chosen because of its dedication
                to saving lives by helping to find a cure for cancer. Because
                The V Foundation sponsors research and treatments for all forms
                of cancer, a disease which almost everyone has a personal
                connection to, a personal relationship will be established with
                this great organization.
              </p>
              <img class="mb-3" src="https://s3.amazonaws.com/delta-chi/jimmy-valvano.jpg" style="width: 100%; height: auto;">
              <p class="card-text">
                “Delta Chi is excited and honored to be working with The V
                Foundation,” said Steve Bossart, Past “AA” (International
                President) of the Fraternity. “Cancer has had an effect on
                every person’s life in some way. This partnership allows Delta
                Chi to help lead the fight against cancer.”
              </p>
              <p class="card-text">
                From 1998 to 2006, Delta Chi chapters and colonies had
                contributed more than 223,000 man-hours to community service
                and have raised more than one million dollars for charitable
                organizations. This partnership with The V Foundation allows
                Delta Chi to focus those efforts towards benefiting a single
                cause and organization.
              </p>
              <p class="card-text">
                You can see more about The V Foundation
                <a href="https://www.jimmyv.org/">here</a>.
              </p>
            </div>
          </div>
        </div>
      </div>
      @include('includes.social-media-feeds')
    </div>
  </div>
@endsection
