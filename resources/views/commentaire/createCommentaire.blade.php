<x-master title='Formulaire'>
    <h3>Create Comment</h3>
    <form method="POST" action="{{ route('commentaires.store') }}">
        @csrf
        <div class="card-footer ">
            <div class="container">
                <div class="row">
                        <div class="mb-3">
                            <input placeholder="nom" type="text" name="nom" class="form-control my-2" value={{ old('nom') }}>
                            @error('nom')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                            @enderror
                            <input placeholder="email" type="text" name="e_mail" class="form-control my-2" value={{ old('e_mail') }}>
                            @error('e_mail')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                            @enderror
                            <textarea placeholder="commentaire" class="form-control my-2" name="commentaire"></textarea>
                            @error('commentaire')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                    <div class="d-grid">
                        <button class="btn btn-primary btn-block" type="submit">Ajout</button>
                    </div>
                </div>
            </div>
        </div>
    </form>  
</x-master>    