@extends('app')

@section('title', '記事詳細')

@section('content')
  @include('nav')
  <div class="container-fluid" style="background-color: #FDEDFB; padding-top: 56pt;">
  <div class="container">
    @include('articles.card')
  </div>
</div>
@endsection