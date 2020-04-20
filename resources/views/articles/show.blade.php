@extends('app')

@section('title', '記事詳細')

@section('content')
  @include('nav')
  <div class="container-fluid" style="background-color: #FDEDFB;">
  <div class="container">
    @include('articles.card')
  </div>
</div>
@endsection