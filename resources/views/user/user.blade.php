<x-master title="User">
    <h3>User =></h3>
    <div class="container-fluid">
        <div class="row">
            <div class="card my-3 py-4">
                <div class="card-body text-center">
                    <img class="card-img-top mx-auto w-25" src="{{ asset('storage/'.$user->image) }}">
                    <h4 class="card-title">{{ $user->name }}</h4>
                    <p class="card-text">{{ $user->created_at->format('y-m-d') }}</p>
                    <p class="card-text">Email: <a href="mailto:{{ $user->email }}">{{ $user->email }}</a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <h3>Vous Articles</h3>
            {{-- {{dd($profile->publications)}} --}}
            <div class="container w-75 mx-auto">
                <div class="row">
                    @foreach ($user->articles as $article)
                        <x-articleCard :canUpdate="auth()->user()->id === $article->user_id" :article="$article" />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-master>