@extends('app')

@section('title', 'Profile')

@section('content')
  @include('nav')
  <div class="container-fluid justify-content-center mb-5" style="background-color: #FDEDFB; margin-top: 56px;">
    <img src="{{ asset('/img/profile.jpg') }}" class="rounded-circle mx-auto d-block p-3" style="height:50vh">
      <h2 class="text-center">Satomi Sato</h2>
      <h3 class="text-center mt-3">触ってきた技術たち</h3>
        <div class="row justify-content-center" id="profileskills">

          <div class="card col-md-2 m-2">
            <a href="{{ route('tags.show', ['name' => 'HTML']) }}">
              <div class="card-body text-center">
                <h5 class="card-title">XHTML</h5>
                <i class="si fas fa-code fa-3x pb-3"></i>
                <h6 class="card-subtitle mb-2">2005</h6>
              </div>
            </a>
          </div>

          <div class="card col-md-2 m-2">
            <div class="card-body text-center">
              <h5 class="card-title">Twitter Bot(PHP)</h5>
              <i class="si fab fa-twitter fa-3x pb-3"></i>
              <h6 class="card-subtitle mb-2">2009</h6>
            </div>
          </div>

          <div class="card col-md-2 m-2">
            <a href="{{ route('tags.show', ['name' => 'CSS']) }}">
              <div class="card-body text-center">
                <h5 class="card-title">CSS</h5>
                <i class="si far fa-file-code fa-3x pb-3"></i>
                <h6 class="card-subtitle mb-2">2013</h6>
              </div>
              </a>
          </div>

          <div class="card col-md-2 m-2">
            <div class="card-body text-center">
              <h5 class="card-title">WordPress</h5>
              <i class="si fab fa-wordpress-simple fa-3x pb-3"></i>
              <h6 class="card-subtitle mb-2">2017</h6>
            </div>
          </div>

          <div class="card col-md-2 m-2">
            <a href="{{ route('tags.show', ['name' => 'GAS']) }}">
              <div class="card-body text-center">
                <h5 class="card-title">GAS</h5>
                <i class="si fab fa-google fa-3x pb-3"></i>
                <h6 class="card-subtitle mb-2">2019</h6>
              </div>
            </a>
          </div>

          <div class="card col-md-2 m-2">
            <a href="{{ route('tags.show', ['name' => 'PC修理']) }}">
              <div class="card-body text-center">
                <h5 class="card-title">PC Repair</h5>
                <i class="si fas fa-wrench fa-3x pb-3"></i>
                <h6 class="card-subtitle mb-2">2019</h6>
              </div>
            </a>
          </div>

          <div class="card col-md-2 m-2">
            <a href="{{ route('tags.show', ['name' => 'JavaScript']) }}">
              <div class="card-body text-center">
                <h5 class="card-title">JavaScript</h5>
                <i class="si fab fa-js-square fa-3x pb-3"></i>
                <h6 class="card-subtitle mb-2">2020</h6>
              </div>
            </a>
          </div>

          <div class="card col-md-2 m-2">
            <a href="{{ route('tags.show', ['name' => 'PHP']) }}">
              <div class="card-body text-center">
                <h5 class="card-title">PHP</h5>
                <i class="si fab fa-php fa-3x pb-3"></i>
                <h6 class="card-subtitle mb-2">2020</h6>
              </div>
            </a>
          </div>

          <div class="card col-md-2 m-2">
            <a href="{{ route('tags.show', ['name' => 'Laravel']) }}">
              <div class="card-body text-center">
                <h5 class="card-title">Laravel</h5>
                <i class="si fab fa-laravel fa-3x pb-3"></i>
                <h6 class="card-subtitle mb-2">2020</h6>
              </div>
            </a>
          </div>

          <div class="card col-md-2 m-2">
            <a href="{{ route('tags.show', ['name' => 'Nodejs']) }}">
              <div class="card-body text-center">
                <h5 class="card-title">Node.js</h5>
                <i class="si fab fa-node-js fa-3x pb-3"></i>
                <h6 class="card-subtitle mb-2">2020</h6>
              </div>
            </a>
          </div>

          <div class="card col-md-2 m-2">
            <a href="{{ route('tags.show', ['name' => 'Bootstrap']) }}">
              <div class="card-body text-center">
                <h5 class="card-title">Bootstrap</h5>
                <i class="si fab fa-bootstrap fa-3x pb-3"></i>
                <h6 class="card-subtitle mb-2">2020</h6>
              </div>
            </a>
          </div>

          <div class="card col-md-2 m-2">
            <a href="{{ route('tags.show', ['name' => 'SQL']) }}">
              <div class="card-body text-center">
                <h5 class="card-title">SQL</h5>
                <i class="si fas fa-database fa-3x pb-3"></i>
                <h6 class="card-subtitle mb-2">2020</h6>
              </div>
            </a>
          </div>

          <div class="card col-md-2 m-2">
            <a href="{{ route('tags.show', ['name' => 'docker']) }}">
              <div class="card-body text-center">
                <h5 class="card-title">docker</h5>
                <i class="si fab fa-docker fa-3x pb-3"></i>
                <h6 class="card-subtitle mb-2">2020</h6>
              </div>
            </a>
          </div>

          <div class="card col-md-2 m-2">
            <a href="{{ route('tags.show', ['name' => 'git']) }}">
              <div class="card-body text-center">
                <h5 class="card-title">git</h5>
                <i class="si fab fa-git-alt fa-3x pb-3"></i>
                <h6 class="card-subtitle mb-2">2020</h6>
              </div>
            </a>
          </div>

          <div class="card col-md-2 m-2">
            <a href="https://github.com/ayareily/">
              <div class="card-body text-center">
                <h5 class="card-title">GitHub</h5>
                <i class="si fab fa-github fa-3x pb-3"></i>
                <h6 class="card-subtitle mb-2">2020</h6>
              </div>
            </a>
          </div>

        </div>

      <h3 class="text-center mt-3">関わったプロジェクトなど</h3>
        <div class="row justify-content-center">
          <div class="card col-md-4 m-2">
            <div class="card-body text-center">
              <h5 class="card-title">Webページ制作</h5>
              <i class="si fas fa-music fa-3x pb-3"></i>
              <h6 class="card-subtitle mb-2">HTML5/CSS/Bootstrap</h6>
            </div>
          </div>

          <div class="card col-md-4 m-2">
            <div class="card-body text-center">
              <h5 class="card-title">WEBページ制作</h5>
              <i class="si fas fa-book-reader fa-3x pb-3"></i>
              <h6 class="card-subtitle mb-2">ホームページビルダー（先方のご希望）</h6>
            </div>
          </div>
        </div>

        <h3 class="text-center mt-3">趣味</h3>
        <div class="row justify-content-center">
          <div class="card col-md-3 m-2">
            <div class="card-body text-center">
              <h5 class="card-title">鉄道</h5>
                  <i class="si fas fa-subway fa-3x pb-3"></i>
                  <h6 class="card-subtitle mb-2">主に新幹線の車両。乗り鉄。</h6>
            </div>
          </div>

          <div class="card col-md-3 m-2">
            <div class="card-body text-center">
              <h5 class="card-title">バス</h5>
                  <i class="si fas fa-bus-alt fa-3x pb-3"></i>
                  <h6 class="card-subtitle mb-2">仙台市営バスの系統番号。</h6>
            </div>
          </div>

          <div class="card col-md-3 m-2">
            <div class="card-body text-center">
              <h5 class="card-title">フォント</h5>
                  <i class="si fas fa-font fa-3x pb-3"></i>
                  <h6 class="card-subtitle mb-2">フリーフォントを眺めています。</h6>
            </div>
          </div>
        </div>
  </div>
@endsection