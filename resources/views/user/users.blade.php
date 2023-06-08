<x-master title="Users">
    <h3>Users=></h3>
    <div class="row my-5">
        @foreach($users as $user)
            <x-userCard :user="$user"/>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{ $users->links() }}
    </div>
</x-master>