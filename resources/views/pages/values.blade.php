@extends('layouts.app')

@section('content')
  <h1>Delta Chi {{$title}}</h1>
  <p>Explain what values Delta Chi upholds.</p>

  <div class="container">
    <div class="panel-group" id="accordion">
      @if(count($values) > 0)
        @foreach($values as $value)
          <div class="panel panel-default">
            <div class="panel-heading">
              {{$value}}
            </div>
            <div class="panel-collapse collapse in">
              <p>This is a test!</p>
            </div>
          </div>
        @endforeach
      @endif
    </div>
  </div>
@endsection
