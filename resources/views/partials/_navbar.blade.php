<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="" width="30" height="30" class="d-inline-block align-top" alt="">
      Mis Pelis
    </a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
        <a class="nav-link" href="{{asset('/peliculas')}}">Peliculas <span class="sr-only">(current)</span></a>
    </li>
    @if(Auth::check())
    <li class="nav-item">
        <a class="nav-link" href="{{asset('/directores')}}">Directores</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{asset('/generos')}}">Géneros</a>
    </li>
    @endif
    </ul>
    @if(auth()->check())
        <p style="margin: 0px 10px 0px 0px;">{{auth()->user()->name}}</p>
        <a href="{{asset('/logout')}}">Logout</a>
        @endif
        @if(!auth()->check())
        <a style="margin-right: 10px" href="{{asset('/login')}}">Login</a>
        <a href="{{asset('/register')}}">Register</a>
        @endif
</div>
</nav>
