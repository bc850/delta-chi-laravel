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
            <img class="img-thumbnail" src="https://whirlwindgolf.com/golf/emailer2020/img/whirlwindgolf/Tournament_Group_Photo.jpg" style="width: 100%; height: auto;">
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <h4>Josh Dykes Memorial Golf Tournament</h4>
            </div>
            <div class="card-body">
              <p class="card-text">
                Each year, Delta Chi hosts a charity tournament with
                proceeds going to medical expenses for children in need within
                the local community. We do this in memory of our brother, Josh Dykes,
                who began organizing the tournaments in 2008.
              </p>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <h4>2018 Golf Tournament</h4>
            </div>
            <div class="card-body">
              <div class="py-3 px-3 mb-3" style="background-color: #f5f5f5; color: #C82B32;">
                Any Donation will be greatly appreciated and will change the life
                of a child in need! Partner with us to make a difference!
              </div>
              <p class="card-text">
                2018 Date: March 2
              </p>
              <p class="card-text">
                Location: Kinderlou Forest Golf Club
              </p>
              <p class="card-text">
                <u>Donation Deadline: February 16</u>
              </p>
              <p class="card-text">
                <u>Team Entry Deadline: February 16</u>
              </p>
              <p class="card-text">
                *Email Zach Dykes, zdykes@valdosta.edu or tournament@deltachivsu.org
                if you have any questions!
              </p>
              <p class="card-text text-center">
                <b><u>Business Sponsorship Opportunities</b></u>
              </p>
              <p class="card-text">
                Cart Sponsor: $500. Delta Chi will include your business name and logo
                as part of the display on every golf cart in the tournament.
                Your business will also have a large logo on the back of our
                annual t-shirt and will be displayed on the event
                brackets distributed during the event.
              </p>
              <p class="card-text">
                Hole Sponsor: $100. Your business will be recognized with a
                large logo on the back of the annual t-shirt, and your
                company's name and logo will be displayed on a teebox sign.
              </p>
              <p class="card-text">
                Bronze Sponsor: $50. Your business name will be on the back of
                the annual t-shirt.
              </p>
              <p class="card-text">
                Team Sponsor: Sign up your team (4 players) for $400 for our
                scramble golf tournament. The team name will be on the back of
                the annual t-shirt.
              </p>
              <p class="card-text">
                <b>*ALL CHECKS CAN BE MADE OUT TO: DELTA CHI FRATERNITY</b>
              </p>
              <p class="card-text">
                Your donation is not just an investment in America’s Future-
                it is also an opportunity for you to raise your profile on campus
                and within the Lowndes Community. We gladly accept donations of
                any amount and please remember that every penny donated will go
                to helping children with medical needs. Every little bit helps
                and allows us to make a larger contribution to helping a child get
                well. Your donation could affect so many lives in such a positive way!
              </p>
            </div>
          </div>
        </div>
      </div>
      @include('includes.social-media-feeds')
    </div>
  </div>
@endsection
