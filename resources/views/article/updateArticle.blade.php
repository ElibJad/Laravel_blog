<x-master title='Formulaire'>
    <h3>Modifie Article</h3>
    @if ($errors->any())
        <x-alert type="danger">
            <h6>Errors :</h6>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
    </x-alert>
    @endif
    <form method="POST" action="{{ route('articles.update', $article->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Titre Article :</label>
            <input type="text" name="titre" class="form-control" value={{ old('titre', $article->titre) }}>
        </div>
        <div class="mb-3">
            <label class="form-label">Contenu :</label>
            <textarea name="contenu" class="form-control">{{ old('contenu', $article->contenu) }}</textarea>
        </div>
        <div class="d-grid my-5">
            <button class="btn btn-primary btn-block" type="submit">Modifie</button>
        </div>
    </form>
</x-master>