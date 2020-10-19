@extends('layouts.landing')

@section('content')
{{-- Inicio --}}
<div class="fondo1" style="background: url('{{asset('assets/img/sistema/fondo-slider.png')}}')">
    {{-- Header --}}
    @include('layouts.componentesLanding.header')
    {{-- Fin Header --}}

    <div class="ui container center-center text-whiye">
        <div class="ui center aligned segment bg-transparent text-white off-border-shadows">
            <h2><strong class="f-900">Lo que imaginas es posible!</strong></h2>
            <h1><strong class="f-900">Es el momento ideal <br> para tu desarrollo web</strong></h1>
            <button class="big ui button btn-rounder hover-one text-white bg-purple-dark transition-08s w-alt" onclick="moveSection('#contactanos')">
                Comienza Ahora
            </button>
            <button class="big ui button btn-rounder hover-two text-white bg-transparent border-blue transition-08s w-alt" onclick="moveSection('#servicios')">
                Cónocenos
            </button>
        </div>
    </div>
</div>
{{-- Fin Inicio --}}
{{-- Nuestros Servicios --}}
@include('landing.componentes.nuestrosServicios')
{{-- Fin Nuestros Servicios --}}
{{-- Nuestros Trabajos --}}
@include('landing.componentes.nuestrosTrabajos')
{{-- Fin Nuestros Trabajos --}}
{{-- Nuestros Aliados --}}
@include('landing.componentes.nuestrosAliados')
{{-- Fin Nuestros Aliados --}}
{{-- Miembre de nuestra empresa --}}
@include('landing.componentes.miembroEmpresa')
{{-- Miembre de nuestra empresa --}}
{{-- Contactanos --}}
@include('landing.componentes.contactanos')
{{-- Contactanos --}}
@endsection
