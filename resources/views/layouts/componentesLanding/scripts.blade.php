{{-- jquery --}}
<script src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
{{-- Semantic --}}
<script src="{{asset('assets/Semantic/semantic.min.js')}}"></script>
{{-- Slick --}}
<script src="{{asset('assets/Slick/slick/slick.min.js')}}"></script>
{{-- Custom JS 
<script src="{{asset('assets/js/scriptLanding.js')}}"></script>
<script src="{{asset('assets/js/scriptcarouselmembers.js')}}"></script>--}}
@php 
	use MatthiasMullie\Minify;
	$minifierJs = new Minify\JS('assets/js/scriptLanding.js');
	$minifierJs->add('assets/js/scriptcarouselmembers.js');
@endphp

<script>
	{!! $minifierJs->minify() !!}
</script>
