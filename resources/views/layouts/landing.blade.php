<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Valdusoft') }}</title>
    @include('layouts.componentesLanding.styles')

    <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-YR15V5XTK6"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'G-YR15V5XTK6');
	</script>
</head>
<body>
    @yield('content')
    @include('layouts.componentesLanding.scripts')
    <script src="https://unpkg.com/axios@0.20.0-0/dist/axios.min.js"></script>
    @stack('scripts')
</body>
</html>