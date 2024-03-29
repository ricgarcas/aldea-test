<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Aldea Test' }}</title>
    @vite('resources/css/app.css')

</head>
<body class="bg-gray-50">

<header>
    @include('components.partials.navigation')
</header>
<main class="mt-8">
    {{ $slot }}
</main>
@stack('scripts')
</body>
</html>
