<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}"> {{-- async --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" defer></script>
    <title>Blog | {{$title}}</title>
</head>
<body style = 'background:gray'>
    @include('partials.nav')

    <main>  
        <div class="container">
            @include('partials.flashbag')
            {{$slot}}
        </div>
    </main>

    @include('partials.footer')
</body>
</html>