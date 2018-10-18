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
          <div class="card-header" style="background-image: url({{$post->image_url}});"></div>
          <div class="card-body">
            <div class="card-title">
              <h5>{{$post->title}}</h5>
            </div>
            <div class="card-text">
              <p>{{ str_limit($post->blurb, $limit = 10, $end = '...') }}</p>
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
