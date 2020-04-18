@extends('app')

@section('title', 'Profile')

@section('content')
  @include('nav')
  <div class="container">
<h2 class="text-center mt-5">Sogetsu Sato</h2>
<h3 class="text-center mt-3">触ってきた技術たち</h3>
  <div class="row justify-content-center">
    <div class="card col-md-3 m-2">
      <div class="card-body text-center">
    <h5 class="card-title">XHTML</h5>
    <i class="fas fa-code fa-3x pb-3"></i>
    <h6 class="card-subtitle mb-2 text-muted">2005</h6>
  </div>
  </div>
<div class="card col-md-3 m-2">
  <div class="card-body text-center">
    <h5 class="card-title">Twitter Bot(PHP)</h5>
    <i class="fab fa-twitter fa-3x pb-3"></i>
    <h6 class="card-subtitle mb-2 text-muted">2009</h6>
  </div>
</div>

<div class="card col-md-3 m-2">
  <div class="card-body text-center">
    <h5 class="card-title">CSS</h5>
    <i class="far fa-file-code fa-3x pb-3"></i>
    <h6 class="card-subtitle mb-2 text-muted">2013</h6>
  </div>
</div>

<div class="card col-md-3 m-2">
  <div class="card-body text-center">
    <h5 class="card-title">WordPress</h5>
    <i class="fab fa-wordpress-simple fa-3x pb-3"></i>
    <h6 class="card-subtitle mb-2 text-muted">2017</h6>
  </div>
</div>

<div class="card col-md-3 m-2">
  <div class="card-body text-center">
    <h5 class="card-title">JavaScript(GAS)</h5>
    <i class="fab fa-js-square fa-3x pb-3"></i>
    <h6 class="card-subtitle mb-2 text-muted">2019</h6>
  </div>
</div>

<div class="card col-md-3 m-2">
  <div class="card-body text-center">
    <h5 class="card-title">PC Repair</h5>
    <i class="fas fa-wrench fa-3x pb-3"></i>
    <h6 class="card-subtitle mb-2 text-muted">2019</h6>
  </div>
</div>

<div class="card col-md-3 m-2">
<a href="{{ route('tags.show', ['name' => 'PHP']) }}">
  <div class="card-body text-center">
    <h5 class="card-title">PHP</h5>
    <i class="fab fa-php fa-3x pb-3"></i>
    <h6 class="card-subtitle mb-2 text-muted">2020</h6>
  </div>
</a>
</div>

<div class="card col-md-3 m-2">
<a href="{{ route('tags.show', ['name' => 'Laravel']) }}">
  <div class="card-body text-center">
    <h5 class="card-title">Laravel</h5>
    <i class="fab fa-laravel fa-3x pb-3"></i>
    <h6 class="card-subtitle mb-2 text-muted">2020</h6>
  </div>
  </a>
</div>

<div class="card col-md-3 m-2">
<a href="{{ route('tags.show', ['name' => 'Node.js']) }}">
  <div class="card-body text-center">
    <h5 class="card-title">Node.js</h5>
    <i class="fab fa-node-js fa-3x pb-3"></i>
    <h6 class="card-subtitle mb-2 text-muted">2020</h6>
  </div>
</a>
</div>

<div class="card col-md-3 m-2">
<a href="{{ route('tags.show', ['name' => 'Bootstrap']) }}">
  <div class="card-body text-center">
    <h5 class="card-title">Bootstrap</h5>
    <i class="fab fa-bootstrap fa-3x pb-3"></i>
    <h6 class="card-subtitle mb-2 text-muted">2020</h6>
  </div>
</a>
</div>
@endsection