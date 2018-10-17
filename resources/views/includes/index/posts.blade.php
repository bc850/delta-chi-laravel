<div class="container my-4">
  <div class="row">
    @foreach ($posts as $post)
      <div class="col-md-4 text-center">
        <h4>{{ $post->title }}</h4>
      </div>
    @endforeach
  </div>
</div>
