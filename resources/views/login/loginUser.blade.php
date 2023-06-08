<x-master title="Se connecter">
    <div class="container w-75 my-2 bg-light p-5">
        <h3>Authentification</h3>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="from-label">Email</label>
                <input type="text" name="email" class="form-control" value={{ old('email') }}>
                @error('email')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="from-label">Mot de passe</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="d-grid">
                <button class="btn btn-primary">Se connecter</button>
            </div>
        </form>
    </div>
</x-master>