<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
  <button class="navbar-toggler" type="button" data-toggle="collapse" 
          data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav mr-auto">
      <li @if($current=="inicial") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="/">Inicial </a>
      </li>
      <li @if($current=="produtos") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="/produtos">Produtos</a>
      </li>
      <li @if($current=="categorias") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="/categorias">Categorias </a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Pesquisar" aria-label="Search">
        <button  class="btn btn-primary" type="submit">Pesquisar</button>
      </form>
  </div>
</nav>