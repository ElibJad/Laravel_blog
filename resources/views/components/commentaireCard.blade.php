<div class="col-sm-4">
  <div class="card mb-3">
      <div class="card-body">
          <h5 class="card-title">{{ $commentaire->nom }}</h5>
          <h5 class="card-title">{{ $commentaire->e_mail }}</h5>
          <h5 class="card-title">{{ $commentaire->commentaire }}</h5>
      </div>
      <div class="card-foot border-top px-3 py-3 bg-light" style="z-index: 9">
          <form action="{{ route('commentaires.destroy', $commentaire->id) }}" method="post">
              @method('DELETE')
              @csrf
              <button class="btn btn-danger btn-sm float-end">Delete your Commente</button>
          </form>
      </div>
  </div>
</div>