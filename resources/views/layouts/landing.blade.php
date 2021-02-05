<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Valdusoft') }}</title>
    @include('layouts.componentesLanding.styles')
</head>
<body>
    @yield('content')
    @include('layouts.componentesLanding.scripts')
    <script src="https://unpkg.com/axios@0.20.0-0/dist/axios.min.js"></script>
    @yield('scripts')
</body>
</html>