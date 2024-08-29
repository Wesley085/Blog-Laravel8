<div class="container-fluid">
    <!-- Navbar brand -->
    <a class="navbar-brand" target="_blank" href="https://mdbootstrap.com/docs/standard/">
      <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="16" alt="" loading="lazy" style="margin-top: -3px;" />
    </a>
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarExample01">
      <!-- Links de navegação -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item active">
          <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('posts') }}" rel="nofollow">Posts</a>
        </li>
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>
        @endguest
      </ul>

      <!-- Centralização do formulário de pesquisa -->
      <div class="d-flex justify-content-center flex-grow-1">
        <form class="d-flex" action="{{ route('home')}}" method="get" style="max-width: 400px;">
          <input class="form-control me-2" type="text" name="s" placeholder="O que deseja buscar?" value="{{ request()->input('s') ?? '' }}">
          <button class="btn btn-dark" type="submit">Buscar</button>
        </form>
      </div>

      <!-- Informações do usuário -->
      <span class="navbar-text ms-3">
        Bem-vindo,
        @if (auth()->guest())
        Guest
        @else
        {{ auth()->user()->fullName }} |
        <a href="{{ route('logout') }}" class="btn btn-outline-dark btn-sm ms-2">Logout</a>
        @endif
      </span>
    </div>
  </div>

