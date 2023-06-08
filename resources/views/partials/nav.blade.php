<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('users.index') }}">BLOG</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="navbar-nav">
            <b>
        <a class="nav-link" href="{{ route('users.index') }}">Utilisateur</a>
            </b>    
            <b>
            <a class="nav-link" href="{{ route('articles.index') }}">Articles</a>
            </b>

            <a class="nav-link -ml-3 bg-danger"  href="{{ route('articles.create') }}">Ajout-Article</a>
            <a class="nav-link -ml-3 bg-light">||</a>
            <a class="nav-link -ml-3 bg-danger" href="{{ route('users.create') }}">Ajout-User</a>
                    
        @guest
        <b>
            <a class="nav-link " href="{{ route('login.show') }}">Veuillez Se connecter</a></b>
        
            @endguest
        @auth

        <br><br>
             <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ auth()->user()->name }}
                </a>
                    <ul class="dropdown-menu -right-3 bg-danger">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                     <li><a class="dropdown-item" href="{{ route('login.logout') }}">Deconnexion</a></li>
                </ul>
            </div>
        @endauth
      </div>
    </div>
</div>
  </nav>