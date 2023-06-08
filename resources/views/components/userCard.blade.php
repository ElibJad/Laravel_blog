<div class="col-sm-4">
    <div class="card mb-3">
        <img src="{{ asset('storage/'.$user->image) }}" class="card-img-top h-50" >
        <div class="card-body">
            <h5 class="card-title">{{ $user->name }}</h5>
            <p class="card-text">{{ Str::limit($user->bio, 50) }}</p>
            <a href="{{ route('users.show', $user->id) }}" class="stretched-link"></a>
        </div>
        <div class="card-foot border-top px-3 py-3 bg-light" style="z-index: 9">
            <form action="{{ route('users.destroy', $user->id) }}" method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger btn-sm float-end">Delete</button>
            </form> 
            <form action="{{ route('users.edit', $user->id) }}" method="GET">
                @csrf
                <button class="btn btn-dark btn-sm float-end mx-3">Update</button>
            </form>
        </div>
    </div>
</div>