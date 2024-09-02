<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>

    <link href="https://fonts.googleapis.com/nunito:200,600" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <div class="container">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>