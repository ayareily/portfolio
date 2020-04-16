@extends('app')

@section('title', 'Diary')

@section('content')
  @include('nav')
  <div class="container">
  <div class="row">
  @foreach($articles as $article)
      
    @include('card')
      
  @endforeach
  </div>
  </div>

  @include('footer')
@endsection