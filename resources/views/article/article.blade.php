<x-master title='Article'>
    <h3>Article</h3>
    <br>
    <x-articleCard :canUpdate="auth()->user() === $article->user_id" :article="$article" />
    <br>
    <div class="container w-75 mx-auto">
        <div class="row">
            @if ($article->commentaires)
                @foreach ($article->commentaires as $commentaire)
                    <x-commentaireCard :commentaire="$commentaire" />
                @endforeach
            @endif
        </div>
    </div>
</x-master>