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