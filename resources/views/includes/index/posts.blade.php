<div class="postscontainer container py-4">
  <div class="row">
    <div class="col-md-12 text-center mb-4 mt-2">
      <h1>Delta Chi News</h1>
    </div>
  </div>
  <div class="row">
    @foreach ($posts as $post)
      <div class="col-lg-4 text-center">
        <div class="card">
          <div class="card-header" style="background-image: url({{$post->image_url}});"></div>
          <div class="card-body">
            <div class="card-title mt-4">
              <h5>{{ str_limit($post->title, $limit = 67, $end = '...') }}</h5>
            </div>
            <div class="card-text mt-3">
              <p>{{ str_limit($post->blurb, $limit = 140, $end = '...') }}</p>
            </div>
            <div class="button-container mt-3">
              <a class="btn btn-primary" href="/posts/{{$post->id}}" id="learnMoreButton">Read More</a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
