<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{route('home.index')}}">EMS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar" aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="textoNavbar">
      <ul class="navbar-nav mr-auto">
        <li class="{{request()->routeIs('home.index') ? 'nav-item active' : 'nav-item'}}">
          <a class="nav-link" href="{{route('home.index')}}">Home <span class="sr-only">(Página atual)</span></a>
        </li>
        <li class="{{request()->routeIs('produtos.index') ? 'nav-item active' : 'nav-item'}}">
          <a class="nav-link" href="{{route('produtos.index')}}">produtos</a>
        </li>        
        <li class="{{request()->routeIs('categorias.index') ? 'nav-item active' : 'nav-item'}}">
        <a class="nav-link" href="{{route('categorias.index')}}">categorias</a>
        </li>
      </ul> 
      <span class="navbar-text">
        Texto navbar com um elemento inline
      </span>
    </div>
  </nav>