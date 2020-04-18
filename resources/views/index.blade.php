@extends('app')

@section('title', 'Portfolio')

@section('content')
  @include('nav')
  <div class="d-flex align-items-center">
    <div class="container-fluid p-0">
      <div class="image" style="background-image:url('{{ asset('/img/headerphoto.png') }}'); background-position: center; background-size: cover; height: 40vh;">
        <h1 class="font-weight-bold">Clerk E's Portfolio</h1>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      @foreach($articles as $article)
        
        @include('card')
        
      @endforeach
    </div>
  </div>

@endsection