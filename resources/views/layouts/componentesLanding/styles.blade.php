<link rel="shortcut icon" href="{{ asset('assets/img/sistema/faviconlogo.ico') }}">
{{-- Font --}}
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@900&display=swap" rel="stylesheet"> 
<link rel=preload href="{{asset('assets/fonts/icons.woff2')}}">
<link rel=preload href="{{asset('assets/fonts/brand-icons.woff2')}}">
{{-- Semantic --}}
<link rel="stylesheet" href="{{asset('assets/Semantic/semantic.min.css')}}">
{{-- Slick 
<link rel="stylesheet" href="{{asset('assets/Slick/slick/slick.css')}}">
<link rel="stylesheet" href="{{asset('assets/Slick/slick/slick-theme.css')}}">
{{-- Css Custom Landing 
<link rel="stylesheet" href="{{asset('assets/css/landingcss.css')}}">--}}
@php 
	use MatthiasMullie\Minify;
	$minifier = new Minify\CSS('assets/Slick/slick/slick.css');
	$minifier->add('assets/Slick/slick/slick-theme.css');
	$minifier->add('assets/css/landingcss.css');
@endphp

<style>
	{!! $minifier->minify() !!}
</style>
