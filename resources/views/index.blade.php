@extends('layouts.landing')


@push('scripts')
    <script>
        function moveSection($section){
            $('html,body').animate({
                scrollTop: $($section).offset().top
            }, 1500);

        }
        
        function loadNewTab($tag_id){
            var route = 'http://localhost:8000/load-new-tab/'+$tag_id;
            //var route = 'https://valdusoft.com/load-new-tab/'+$tag_id;
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
            var route = 'http://localhost:8000/load-more-projects';
            //var route = 'https://valdusoft.com/load-more-projects';
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
                   /*  console.log(ans);*/
                   $("#projects_section").html(ans);
                    /*if ($("#totalProjects").val() > $("#cantProjects").val()){
                        $("#show-more-projects").css('display', 'block');
                    }else{
                        $("#show-more-projects").css('display', 'none');
                    }*/
                }
            });
        }
    
        function showProject(id){
            var route = 'http://localhost:8000/show-project/'+id;
            //var route = 'https://valdusoft.com/show-project/'+id;

            $.ajax({
                url: route,
                type: "GET",
                success:function(response){
                    $('#show-project-content').html(response);
                    $('#showProject').modal('show');
                }
            });
        }
    </script>
@endpush

@section('content')
    {{-- Nuestros Servicios --}}
    <div class="container text-center mt-5" id="servicios">
        <h1 class="our-services-title"><strong>Nuestros Servicios</strong></h1>
        <h2 class="our-services-subtitle">¿Qué ofrecemos?</h2>

        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12 p-3 our-services-box">
                <img src="{{asset('assets/images/website-design.svg')}}" alt="">
                <h4 class="text-gray-dark">Diseño Web</h4>
                <p class="text-center our-services-box-text">
                    El diseño web no solo engloba como se vera tu web también es la planificación de la estructura
                    con la cual vas a trasmitir la esencia de tu web al usuario. Permitiendo presentar de manera
                    maravillosa tu idea a los potenciales cliente En un Área que debe tener total armonía con tu
                    marca. Somos capaces de ofrecerte una revolución visual que permita captar la atención de los
                    visitantes de manera correcta.
                </p>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12 p-3 our-services-box">
                <img src="{{asset('assets/images/mobile-app.svg')}}" alt="">
                <h4 class="text-gray-dark">Desarrollo de Apps</h4>
                <p class="text-center our-services-box-text">
                    Desarrollamos Tu Aplicación móvil a medida atendiendo tus necesidades, ofreciendo soluciones de
                    calidad que permita llevar a acabo tu propuesta o idea de negocio a las tiendas de app store y
                    play store. Actualmente EL mayor trafico que tienen las empresas provienen de sus aplicaciones
                    móviles. Una gran app es una vitrina impresionante para tu negocio.
                </p>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12 p-3 our-services-box">
                <img src="{{asset('assets/images/web-debelopment.svg')}}" alt="">
                <h4 class="text-gray-dark">Desarrollo Web</h4>
                <p class="text-center our-services-box-text">
                    Desarrollo web Nos permite Desarrollar una herramienta para tu negocio o empresa que optimice
                    todos los procesos tomando en cuneta tus necesidades, usamos los estándares mas actuales para
                    hacer tu aplicación web garantizando una funcionalidad optima y ser escalable que te permita
                    siempre estar en constante mejora.
                </p>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12 p-3 our-services-box">
                <img src="{{asset('assets/images/Page-1.svg')}}" alt="">
                <h4 class="text-gray-dark">UX / UI</h4>
                <p class="text-center our-services-box-text">
                    Tu plataforma siempre tiene que estar orientado a los usuarios y a su usabilidad no podemos
                    tener solo un diseño bonito se debe realizar un diseño que sea capaz de convertir un lead en un
                    cliente, siempre pensando en que la plataforma sea totalmente fácil de usar para tener la mayor
                    interacción Aplicando estrategias posiciones y de llamadas a ala acción
                </p>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12 p-3 our-services-box">
                <img src="{{asset('assets/images/database-server.svg')}}" alt="">
                <h4 class="text-gray-dark">Hosting</h4>
                <p class="text-center our-services-box-text">
                    Ofrecemos la mejor calidad de servidores a tu disposición donde tiene un soporte 24/7 red
                    directa con el datacenter de Canadá. Soluciones para webs, blogs, intranet servidores para
                    streaming. Los planes con los mejores precios del mercado
                </p>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12 p-3 our-services-box">
                <img src="{{asset('assets/images/ribbon-design.svg')}}" alt="">
                <h4 class="text-gray-dark">Diseño Gráfico</h4>
                <p class="text-center our-services-box-text">
                    Es importante que tu marca tenga una esencia se genere el branding adecuado, que permita a los
                    clientes siempre reconocer tu marca, las imágenes deben hacerse con un propósito con un diseño
                    adecuado que permita trasmitir lo que somos y donde queremos llegar.
                </p>
            </div>
        </div>
    </div>
    {{-- Fin Nuestros Servicios --}}

    {{-- Nuestros Proyectos --}}
    <div id="portafolio">
        <div class="mt-5 pb-4">
            <div class="our-works-title">Portafolio</div>

            <div class="row our-works-subtitle">
                <div class="col-xl-6 col-lg-6 col-md-4 col-12">
                    <h3>Este es nuestro trabajo</h3>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-8 col-12 our-works-menu">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link active our-works-menu-link" href="javascript:;" id="0" onclick="loadNewTab(this.id);">Todos</a>
                        </li>
                        
                        @foreach ($tags as $tag)
                            <li class="nav-item">
                                <a class="nav-link our-works-menu-link"  href="javascript:;" id="{{$tag->id}}" onclick="loadNewTab(this.id);">{{$tag->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="pb-5" id="projects_section">
            <form id="form_data_projects">
                <input type="hidden" id="meta_token" value="{{ csrf_token() }}">
                <input type="hidden" name="projects" id="projects" value="{{ json_encode($projects) }}">
                <input type="hidden" name="listedProjects" id="listedProjects" value="{{ json_encode($listedProjects) }}">
                <input type="hidden" name="totalProjects" id="totalProjects" value="{{ $totalProjects }}">
                <input type="hidden" name="cantProjects" id="cantProjects" value="{{ $cantProjects }}">
                <input type="hidden" name="tag_id" id="tag_id" value="{{ $tag_id }}">
            </form>
            <div class="row" style="margin-left: 0px;" >
                @foreach($projects as $project)
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 our-works-card" style="background: url('https://clients.valdusoft.com/uploads/images/projects/{{$project->logo}}');
                        background-color: #3bbce8; background-size: cover;">
                        <div class="overlay" onclick="showProject({{$project->id}});">
                            <div class="our-works-company-logo">
                                <img class="rounded-circle" src="{{ asset('https://clients.valdusoft.com/uploads/images/users/logos/'.$project->user->logo) }}">
                            </div>
                            <div class="row" style="margin-left: 0px;">
                                <div class="col-md-12 our-works-project-name">{{ $project->name }}</div>
                                <div class="col-md-12 our-works-technologies">
                                    @foreach ($project->technologies as $index => $technology)
                                        @if($index != $project->technologies_count - 1)
                                            {{ $technology->name }},
                                        @else
                                            {{ $technology->name }}.
                                        @endif
                                    @endforeach 
                                </div>
                                <div class="col-md-12 our-works-tag">
                                    @foreach ($project->tags as $index2 => $tag)
                                        @if($index2 != $project->tags_count - 1)
                                            {{ $tag->name }},
                                        @else
                                            {{ $tag->name }}.
                                        @endif
                                    @endforeach
                                </div>
                            </div>  
                        </div>
                    </div>
                @endforeach
            </div>

            @if ($totalProjects > $cantProjects)
                <div class="mt-5 text-center" id="show-more-projects">
                    <button class="btn blue-btn" type="button" onclick="loadMoreProjects();">Ver más proyectos...</button>
                </div>
            @endif
            
        </div>
    </div>

    {{-- Contáctanos --}}
    <div class="contact-section" id="contactanos">
        <div class="container contact-section-form-div">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-12 p-xl-5 p-lg-5 p-md-5 p-3 contact-section-left">
                    <h4 class="text-white ml-3">Contáctanos</h4>
                    <ul class="list-group contact-section-list">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-2 text-right" style="padding-left: 0px; padding-right: 0px;">
                                    <img src="{{ asset('assets/bootstrap-icons-1.5.0/telephone.svg') }}" alt="">
                                </div>
                                <div class="col-md-10 text-left" style="padding-left: 10px; padding-right: 0px;">
                                    <b>Teléfono</b> 
                                    <div>+58 (426) 931-57-24</div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-2 text-right contact-section-icon" style="padding-left: 0px; padding-right: 0px;">
                                    <img src="{{ asset('assets/bootstrap-icons-1.5.0/envelope.svg') }}" alt="">
                                </div>
                                <div class="col-md-10 text-left contact-section-icon" style="padding-left: 10px; padding-right: 0px;">
                                    <b>Email</b> 
                                    <div>info@valdusoft.com</div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-2 text-right contact-section-icon" style="padding-left: 0px; padding-right: 0px;">
                                    <img src="{{ asset('assets/bootstrap-icons-1.5.0/geo-alt.svg') }}" alt="">
                                </div>
                                <div class="col-md-10 text-left contact-section-icon" style="padding-left: 10px; padding-right: 0px;">
                                    <b>Dirección</b> 
                                    <div>San Cristóbal - Edo. Táchira Venezuela</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-12 p-xl-5 p-lg-5 p-md-5 p-2 contact-section-right">
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>                   
                    @endif

                    <form method="POST" action="{{ route ('contact')}}">
                        @csrf
                        <div class="form-row">
                            <div class="col-6">
                                <input type="text" name="name" class="form-control contact-section-input" placeholder="Nombre" value="{{ old('name')}}" required>
                                {!! $errors->first('name', '<small class="text-white">:message</small><br>') !!}
                            </div>
                            <div class="col-6">
                                <input type="email" name="email" class="form-control contact-section-input" placeholder="Email" value="{{ old('email')}}" required>
                                {!! $errors->first('email', '<small class="text-white">:message</small><br>') !!}
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mt-3">
                                <input type="text" name="subject" class="form-control contact-section-input" placeholder="Asunto" value="{{ old('subject')}}" minlength="7" required>
                                {!! $errors->first('subject', '<small class="text-white">:message</small><br>') !!}
                            </div>
                            <div class="col-md-6 mt-3">
                                <input type="text" name="phone" class="form-control contact-section-input"  placeholder="Teléfono" value="{{ old('phone')}}" minlength="11" required>
                                {!! $errors->first('phone', '<small class="text-white">:message</small><br>') !!}
                            </div>
                        </div>
                        <div class="form-row mt-3">
                            <div class="col-md-12">
                                <textarea name="message" class="form-control contact-section-input" rows="2" placeholder="Mensaje" minlength="26" required>{{ old('message')}}</textarea>
                                {!! $errors->first('message', '<small class="text-white">:message</small><br>') !!}
                            </div>
                        </div>
                        <div class="form-row mt-3">
                            <div class="col-md-12 contact-section-captcha">
                                <div class="g-recaptcha" data-sitekey="6LdTkKAaAAAAAFDeD3XBngiRW3qVAusWf91s6diz"></div>
                                {!! $errors->first('g-recaptcha-response', '<small class="text-white">El campo del captcha es obligatorio</small><br>') !!}
                            </div>
                        </div>
                        <div class="form-row mt-3">
                            <div class="col-md-12 contact-section-button-div">
                                <button class="btn contact-section-button" type="submit">Contáctanos</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row"> 
            <div class="col-xl-3 col-lg-3 col-md-3 col-12 text-center pt-5">
                <a href="https://www.facebook.com/Valdusoft-100400218791444" target="_blank" class="btn"><img src="{{ asset('assets/bootstrap-icons-1.5.0/facebook.svg') }}" alt=""> </a>
                <a href="https://www.instagram.com/valdusoft_/" target="_blank" class="btn"><img src="{{ asset('assets/bootstrap-icons-1.5.0/instagram.svg') }}" alt=""></a>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-12 text-center pt-5">
                <h4 class="text-white">&copy; 2020 Valdusoft All rights reserved</h4>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-12 text-center" style="padding-top: 35px;">
                <a href="#" onclick="moveSection('#inicio')">
                    <img src="{{asset('assets/images/logo.webp')}}" class="img-logo">
                </a>
            </div>
        </div>
    </div>

    {{-- Modal para ver detalles del proyecto --}}
    <div class="modal fade" id="showProject" tabindex="-1" role="dialog" aria-modal="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary white">
                    <h5 class="modal-title">Detalles del Proyecto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" id="show-project-content">
                    
                </div>
            </div>
        </div>
    </div>
@endsection