@extends('app')

@section('title', 'Portfolio')

@section('content')
  @include('nav')
    <div class="container-fluid p-0">
        <div class="d-flex align-items-center justify-content-center" style="background-image:url('{{ asset('/img/top.png') }}'); background-position: right; background-size: cover; height: 100vh;">
        <h1 class="pb-5" style="font-family: 'Pacifico', cursive;">My name is Clerk E.</h1>
      </div>
    </div>

@endsection