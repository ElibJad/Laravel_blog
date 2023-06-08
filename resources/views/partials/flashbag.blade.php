<div class="row my-4">
    @if (session()->has('success'))
        <x-alert type="success">
            {{session('success')}}
        </x-alert>
    @endif
</div>