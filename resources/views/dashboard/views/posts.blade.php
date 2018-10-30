@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      @include('dashboard.navigation.navigation')
      <div class="col-md-6 my-3">
        <div class="card">
          <div class="card-header">
            <h3>Your News Posts</h3>
          </div>
          <div class="card-body">
              @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
              @endif
              <div class="mb-4">
                <a href="/posts/create" class="btn btn-primary">Create Post</a>
              </div>
              @if(count($posts) > 0)
                <div>
                  <table class="table table-striped">
                    <tr>
                      <th>Title</th>
                      <th></th>
                      <th></th>
                    </tr>
                    @foreach ($posts as $post)
                      <tr>
                        <td>{{$post->title}}</td>
                        <td><a class="btn btn-default" href="/posts/{{$post->id}}/edit">Edit</a></td>
                        <td>
                          {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                          {!!Form::close()!!}
                        </td>
                      </tr>
                    @endforeach
                  </table>
                  <div class="text-center">
                    {{$posts->links()}}
                  </div>
                </div>
              @else
                <p>You have no news posts.</p>
              @endif
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
