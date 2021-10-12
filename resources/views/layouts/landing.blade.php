<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Valdusoft - Desarrollo y diseño web</title>

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-4.6.0/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/theme.css')}}">

    @stack('styles')
</head>
<body>
    {{-- Inicio --}}
    <div class="main-background" style="background: url('{{asset('assets/images/fondo-slider.webp')}}')">
        {{-- Header --}}
        @include('layouts.partials.menu')
        {{-- Fin Header --}}

        @if (Session::has('success'))
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-2 col-12"></div>
                <div class="col-xl-6 col-lg-6 col-md-8 col-12">
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="alert-heading">¡Mensaje Enviado!</h4>
                        <hr>
                        <p>Tu mensaje ha sido enviado con éxito. ¡Gracias por contactarnos!</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-2 col-12"></div>
            </div>
        @endif

        <div class="container text-center text-white mt-5 pt-5 pb-5">
            <div>
                <h3><strong>¡LO QUE IMAGINAS ES POSIBLE!</strong></h3>
                <h1><strong>Es el momento ideal para <br> tu desarrollo web</strong></h1>
            </div>
            <div class="mt-3">
                <a class="btn btn-outline-info btn-lg purple-btn mr-3" target="_blank" href="https://wa.me/584269315724?text=Quiero%20comenzar%20a%20desarrollar%20"> Comienza Ahora</a>
                <button class="btn btn-outline-info btn-lg transparent-btn" onclick="moveSection('#portafolio')">
                Ver proyectos
                </button>
            </div>
        </div>
    </div>

    @yield('content')

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YR15V5XTK6"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'G-YR15V5XTK6');
	</script>

    {{--<script src="{{ asset('assets/js/jquery-3.5.1.slim.min.js') }}"></script>--}}
    <script src="{{ asset('assets/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap-4.6.0/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.5.0/dist/lazyload.min.js"></script>
    {{-- Recatcha --}}
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
    @stack('scripts')
</body>
</html>