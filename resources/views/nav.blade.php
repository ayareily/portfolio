<nav class="navbar navbar-expand navbar-dark purple-gradient">

  <a class="navbar-brand" href="{{ route('diary') }}"><i class="fab fa-fort-awesome mr-1"></i>Clerk E</a>

  <ul class="navbar-nav ml-auto">

  <li class="nav-item">
      <a class="nav-link" href="">HOME</a>
    </li>
  <li class="nav-item">
      <a class="nav-link" href="">PROFILE</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('diary') }}">DIARY</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="https://twitter.com/ayareily"><i class="fab fa-twitter"></i></a>
    </li>



    @guest
    <li class="nav-item">
      <a class="nav-link" href="{{ route('register') }}">ユーザー登録</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('login') }}">ログイン</a>
    </li>
    @endguest

    @auth
    <li class="nav-item">
      <a class="nav-link" href="{{ route('articles.create') }}"><i class="fas fa-pen mr-1"></i>投稿する</a>
    </li>
    @endauth

    @auth
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
         aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
        <button form="logout-button" class="dropdown-item" type="submit">
          ログアウト
        </button>
      </div>
    </li>
    <form id="logout-button" method="POST" action="{{ route('logout') }}">
    @csrf
    </form>
    <!-- Dropdown -->
    @endauth

  </ul>

</nav>