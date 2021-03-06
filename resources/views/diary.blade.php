@extends('app')

@section('title', 'Diary')

@section('content')
  @include('nav')
  <div class="container-fluid" style="background-color: #FDEDFB; padding-top: 56pt;">
  <h1 class="text-center p-3 m-0">学習記録</h1>
  <div class="row mb-3">
  @foreach($articles as $article)
      
    @include('card')
      
  @endforeach
  
  </div>
  </div>
  <div class="row d-flex justify-content-center" style="background-color: #FDEDFB;">
    {{ $articles->links() }}
  </div>
  </div>
  </div>

@endsection
