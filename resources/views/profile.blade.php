@extends('app')

@section('title', 'Profile')

@section('content')
  @include('nav')
  <div class="container-fluid justify-content-center mb-5" style="background-color: #FDEDFB; margin-top: 56px;">
    <img src="{{ asset('/img/profile.jpg') }}" class="rounded-circle mx-auto d-block p-3" style="height:50vh">
      <h2 class="text-center">Satomi Sato</h2>
        <div class="row justify-content-center" id="profileskills">

          <div class="card col-md-10 m-2">
            <h3 class="card-title text-center mt-3">触ってきた技術たち</h3>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <h5 class="list-group-item-heading">2005</h5>
                    <a class="d-flex align-items-end" href="{{ route('tags.show', ['name' => 'HTML']) }}">
                    <i class="si fas fa-code fa-2x mr-2"></i>XHTML</a>
                </li>

                <li class="list-group-item">
                  <h5 class="list-group-item-heading">2009</h5>
                    <p class="d-flex align-items-end mb-2" style="color: #C71585;">
                    <i class="si fab fa-twitter fa-2x mr-2"></i>Twitter bot(PHP)</p>
                </li>

                <li class="list-group-item">
                  <h5 class="list-group-item-heading">2013</h5>
                    <a class="d-flex align-items-end mb-2" href="{{ route('tags.show', ['name' => 'CSS']) }}">
                    <i class="si fas fa-code fa-2x mr-2"></i>CSS</a>
                </li>

                <li class="list-group-item">
                  <h5 class="list-group-item-heading">2017</h5>
                    <p class="d-flex align-items-end mb-2" style="color: #C71585;">
                    <i class="si fab fa-wordpress-simple fa-2x mr-2"></i>WordPress</p>
                </li>

                <li class="list-group-item">
                  <h5 class="list-group-item-heading">2019.8</h5>
                    <a class="d-flex align-items-end mb-2" href="{{ route('tags.show', ['name' => 'PC修理']) }}">
                    <i class="si fas fa-wrench fa-2x mr-2"></i>PC Repair</a>
                </li>

                <li class="list-group-item">
                  <h5 class="list-group-item-heading">2019.10</h5>
                    <a class="d-flex align-items-end mb-2" href="{{ route('tags.show', ['name' => 'GAS']) }}">
                    <i class="si fab fa-google fa-2x mr-2"></i>GAS</a>
                </li>
                
                <li class="list-group-item">
                  <h5 class="list-group-item-heading">2020.2</h5>
                    <a class="d-flex align-items-end mb-2" href="{{ route('tags.show', ['name' => 'JavaScript']) }}">
                    <i class="si fab fa-js-square fa-2x mr-2"></i>JavaScript</a>
                </li>

                <li class="list-group-item">
                  <h5 class="list-group-item-heading">2020.3</h5>
                    <a class="d-flex align-items-end mb-2" href="{{ route('tags.show', ['name' => 'PHP']) }}">
                    <i class="si fab fa-php fa-2x mr-2"></i>PHP</a>

                    <p class="d-flex align-items-end mb-2" style="color: #C71585;">
                    <i class="si fab fa-docker fa-2x mr-2"></i>docker</p>

                    <a class="d-flex align-items-end mb-2" href="{{ route('tags.show', ['name' => 'Laravel']) }}">
                    <i class="si fab fa-laravel fa-2x mr-2"></i>Laravel</a>

                    <a class="d-flex align-items-end mb-2" href="{{ route('tags.show', ['name' => 'Bootstrap']) }}">
                    <i class="si fab fa-bootstrap fa-2x mr-2"></i>Bootstrap</a>

                    <a class="d-flex align-items-end mb-2" href="{{ route('tags.show', ['name' => 'git']) }}">
                    <i class="si fab fa-git-alt fa-2x mr-2"></i>git</a>

                    <a class="d-flex align-items-end mb-2" href="https://github.com/ayareily/">
                    <i class="si fab fa-github fa-2x mr-2"></i>GitHub</a>
                </li>

                <li class="list-group-item">
                  <h5 class="list-group-item-heading">2020.4</h5>
                    <a class="d-flex align-items-end mb-2" href="{{ route('tags.show', ['name' => 'Nodejs']) }}">
                    <i class="si fab fa-node-js fa-2x mr-2"></i>Node.js</a>
                </li>

                <li class="list-group-item">
                  <h5 class="list-group-item-heading">2020.5</h5>
                    <a class="d-flex align-items-end mb-2" href="{{ route('tags.show', ['name' => 'SQL']) }}">
                    <i class="si fas fa-database fa-2x mr-2"></i>SQL</a>
                </li>
              </ul>

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
                  <h6 class="card-subtitle mb-2">MSゴシックが敵。</h6>
            </div>
          </div>
        </div>
  </div>
@endsection