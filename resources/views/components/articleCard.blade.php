<div class="card my-2 bg-light">
    <div class="card-body">
        <blockquote class="blockquote mb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="position-relative">
                            <p>{{$article->user->name}}</p>
                            <a href="{{ route('articles.show', $article->id) }}" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="col">
                        <p>{{$article->titre}}</p>
                        @auth
                        @if ($canUpdate === true)
                            <a class=" float-end btn btn-dark btn-sm" href="{{route('articles.edit', $article->id)}}">Modifie</a>
                            <form action="{{route('articles.destroy', $article->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Voulez vous vraiment suprimer cette article ?')" class=" float-end btn btn-danger btn-sm mx-3">Supprimer</button>
                            </form>
                        @endif
                    @endauth
                    </div>
                </div>
            </div>
            <hr>
            <p>{{$article->contenu}}</p>
        </blockquote>
    </div>
    <div class="card-footer">
        <a href="{{route('commentaires.create')}}" class="btn btn-primary btn-block">Ajouter un commentaire</a>
    </div>
</div>