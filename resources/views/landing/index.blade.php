@extends('layouts.landing')

@push('scripts')
    <script>
        function loadNewTab($tag_id){
            //var route = 'http://localhost:8000/load-new-tab/'+$tag_id;
            var route = 'https://valdusoft.com/load-new-tab/'+$tag_id;
            $.ajax({
                url: route,
                type: "GET",
                success:function(ans){
                    $("#portafolio").html(ans);
                }
            }); 

            setTimeout(function(){ 
               refreshButton(); 
            }, 2000);
        }

        function refreshButton(){
            if ( parseInt($("#totalProjects").val()) > parseInt($("#cantProjects").val()) ){
                $("#show-more-projects").css('display', 'block');
            }else{
                $("#show-more-projects").css('display', 'none');
            }
        }

        function loadMoreProjects(){
            //var route = 'http://localhost:8000/load-more-projects';
            var route = 'https://valdusoft.com/load-more-projects';
            var formData = new FormData(document.getElementById("form_data_projects"));
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $("#meta_token").val()    
                },
                url: route,
                type: "POST",
                data: formData,
                processData: false,  // tell jQuery not to process the data
                contentType: false,
                success:function(ans){
                    $("#projects_section").html(ans);
                    if ($("#totalProjects").val() > $("#cantProjects").val()){
                        $("#show-more-projects").css('display', 'block');
                    }else{
                        $("#show-more-projects").css('display', 'none');
                    }
                }
            });
        }

        function showDetails(id){
            axios.get(`/model/${id}`)
            .then(response => {
                const data = response.data
                img = document.getElementById('img-modal')
                img.src = `/assets/img/projects-ally/${data.ally_imag}`
                
            })
            .catch(err => {
                console.log(err.response)
            })
            $('#image-modal').modal('show');
        }
    
        function showProject(id){
            axios.get(`/model/${id}`)
            .then(response => {
                const data = response.data
                img = document.getElementById('img-modal')
                img.src = `/assets/img/projects-porta/${data.porta_image}`
                
            })
            .catch(err => {
                console.log(err.response)
            })
            $('#image-modal').modal('show');
        }
    </script>
@endpush

@section('content')
{{-- Inicio --}}
<div class="fondo1" style="background: url('{{asset('assets/img/sistema/fondo-slider.webp')}}')">
    {{-- Header --}}
    @include('layouts.componentesLanding.header')
    {{-- Fin Header --}}

    <div class="ui container center-center text-white">
        <div class="ui center aligned segment bg-transparent text-white off-border-shadows">
            <h2><strong class="f-900">¡LO QUE IMAGINAS ES POSIBLE!</strong></h2>
            <h1><strong class="f-900">Es el momento ideal para <br> tu desarrollo web</strong></h1>
            <a target="_blank" href="https://wa.me/584269315724?text=Quiero%20comenzar%20a%20desarrollar%20" class="big ui button btn-rounder hover-one text-white bg-purple-dark transition-08s w-alt"> Comienza Ahora</a>
           <!-- <button target="_blank" onclick="location.href = 'https://wa.me/584269315724?text=Quiero%20comenzar%20a%20desarrollar%20','_blank';" class="big ui button btn-rounder hover-one text-white bg-purple-dark transition-08s w-alt">
                Comienza Ahora
            </button>-->
            <button class="big ui button btn-rounder hover-two text-white bg-transparent border-blue transition-08s w-alt" onclick="moveSection('#portafolio')">
               Ver proyectos
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
{{--Modal--}}
@include('landing.componentes.modal')
{{--Modal--}}
@endsection