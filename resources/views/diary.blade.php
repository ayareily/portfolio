@extends('app')

@section('title', 'Diary')

@section('content')
  @include('nav')
  <div class="container">
    @foreach($articles as $article)
      
      @include('articles.card')
      
  @endforeach

@endsection