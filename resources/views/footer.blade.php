<nav class="navbar navbar-expand navbar-dark blue-gradient">

    @guest
  <ul>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('login') }}">Admin menu</a>
    </li>
    @endguest

  </ul>

</nav>