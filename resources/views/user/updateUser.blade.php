<x-master title='Formulaire'>
    <h3>Update Users=></h3>
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
    <form method="POST" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nom :</label>
            <input type="text" name="name" class="form-control" value={{ old('name', $user->name) }}>
        </div>
        <div class="mb-3">
            <label class="form-label">Email :</label>
            <input type="text" name="email" class="form-control" value={{ old('email', $user->email) }}>
        </div>    
        <div class="mb-3">
            <label class="form-label">Mot de passe :</label>
            <input type="password" name="password" class="form-control">       
        </div>    
        <div class="mb-3">
            <label class="form-label">Confirmation mot de passe :</label>
            <input type="password" name="password_confirmation" class="form-control">       
        </div>
        <div class="mb-3">
            <label class="form-label">Image :</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="d-grid my-5 ">
            <button class="btn btn-primary btn-block" type="submit">Modifier</button>
        </div>
    </form>
</x-master>