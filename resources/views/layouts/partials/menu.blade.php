<!--<div class="ui menu bg-transparent off-border-shadows pc" id="inicio">
    <div class="ui container mt-3">
        <div class="item" style="width: 30%">
            <a href="{{ route('index') }}"><img src="{{ asset('assets/images/Logo.png') }}" class="img-logo"></a>
        </div>
        <div class="right menu">
            <a class="item text-white" onclick="moveSection('#servicios')">
                <div>Servicios</div>
            </a>
            <a class="item text-white" onclick="moveSection('#portafolio')">
                <div>Portafolio</div>
            </a>
            <a class="item text-white" onclick="moveSection('#aliados')">
                <div>Aliados</div>
            </a>
            <a class="item text-white" onclick="moveSection('#equipo')">
                <div>Equipo</div>
            </a>
            <a class="item text-white" onclick="moveSection('#contactanos')">
                <div>Contacto</div>
            </a>
            <a class="item text-white" href="https://clients.valdusoft.com/login" target="_blank">
                <div>Acceso Clientes</div>
            </a>
        </div>
    </div>
</div>

<div class="ui menu bg-transparent off-border-shadows movil">
    <div class="ui dropdown icon item">
        <img src="{{asset('assets/img/sistema/Logo.png')}}" height="60" class="img-logo">
        <i class="dropdown icon"></i>
        <div class="menu ">
            <a class="item text-white text-center">
                <div>Servicios</div>
            </a>
            <a class="item text-white text-center">
                <div>Portafolio</div>
            </a>
            
            <a class="item text-white text-center">
                <div>Aliados</div>
            </a>
            
            <a class="item text-white text-center">
                <div>Equipo</div>
            </a>
            <a class="item text-white text-center">
                <div>Contacto</div>
            </a>
        </div>
    </div>
</div>-->

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: none;">
    <div class="pt-3 navbar-brand-div">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/images/logo.webp') }}" class="navbar-brand-logo"  alt="">
        </a>
    </div>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <img src="{{ asset('assets/bootstrap-icons-1.5.0/list.svg') }}" alt="">
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto navbar-menu">
            <li class="nav-item mr-3 navbar-menu-item">
                <a class="nav-link text-white" href="javascript:;" onclick="moveSection('#servicios')">Servicios</a>
            </li>
            <li class="nav-item mr-3 navbar-menu-item">
                <a class="nav-link text-white" href="javascript:;" onclick="moveSection('#portafolio')">Portafolio</a>
            </li>
            <!--<li class="nav-item mr-3 navbar-menu-item">
                <a class="nav-link text-white" href="javascript:;" onclick="moveSection('#aliado')">Aliados</a>
            </li>
            <li class="nav-item mr-3 navbar-menu-item">
                <a class="nav-link text-white" href="javascript:;" onclick="moveSection('#equipo')">Equipo</a>
            </li>-->
            <li class="nav-item mr-3 navbar-menu-item">
                <a class="nav-link text-white" href="javascript:;" onclick="moveSection('#contactanos')">Contacto</a>
            </li>
            <li class="nav-item mr-3 navbar-menu-item">
                <a class="nav-link text-white" href="https://clients.valdusoft.com/login" target="_blank">Acceso Clientes</a>
            </li>
        </ul>
    </div>
</nav>