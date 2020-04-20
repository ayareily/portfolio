@extends('app')

@section('title', 'Diary')

@section('content')
  @include('nav')
  <div class="container-fluid" style="background-color: #FFCCFF;">
  <h1 class="text-center p-3 m-0">学習記録</h1>
  <div class="row">
  @foreach($articles as $article)
      
    @include('card')
      
  @endforeach
  </div>
  </div>

@endsection
