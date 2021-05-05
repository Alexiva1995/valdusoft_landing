<div class="ui menu bg-transparent off-border-shadows pc" id="inicio">
    <div class="ui container mt-3">
        <div class="item" style="width: 30%">
            <a href="{{ route('landing') }}"><img src="{{ asset('assets/img/sistema/Logo.png') }}" class="img-logo"></a>
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
            <!--<a class="item text-white" onclick="moveSection('#equipo')">
                <div>Equipo</div>
            </a>-->
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
            
            <!--<a class="item text-white text-center">
                <div>Equipo</div>
            </a>-->
            <a class="item text-white text-center">
                <div>Contacto</div>
            </a>
        </div>
    </div>
</div>