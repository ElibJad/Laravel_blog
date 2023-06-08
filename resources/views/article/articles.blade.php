<x-master title="Articles">
    <h3>Articles=></h3>
    <div class="container w-75 mx-auto">
        <div class="row">
            @foreach ($articles as $article)
                <x-articleCard :canUpdate="auth()->user() === $article->user_id" :article="$article" />
            @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {{ $articles->links() }}
    </div>
</x-master>