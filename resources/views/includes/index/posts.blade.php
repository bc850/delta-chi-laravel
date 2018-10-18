<div class="postscontainer container my-4">
  <div class="row my-4">
    <div class="col-md-12 text-center">
      <h1>Delta Chi News</h1>
    </div>
  </div>
  <div class="row">
    @foreach ($posts as $post)
      <div class="col-md-4 text-center">
        <div class="card">
          <div class="card-header" style="background-image: url(https://s3.amazonaws.com/united-way-greater-valdosta/uw-education-icon.png);"></div>
          <div class="card-body">
            <div class="card-title">
              <h5>{{$post->title}}</h5>
            </div>
            <div class="card-text">
              <p>Assure children and youth have the support and experiences needed for a successful life and career.</p>
            </div>
            <div class="button-container">
              <button type="button" class="btn btn-primary" href="#" id="learnMoreButton">Learn More</button>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
