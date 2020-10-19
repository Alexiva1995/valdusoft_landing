<div class="fondo2 p-start-end" style="background: url('{{asset('assets/img/sistema/Recurso-2logo.png')}}')" id="equipo">
    <div class="ui container mt-5">
        <div class="ui center aligned segment off-border-shadows">
            <h4 class="text-blue-light"><strong>MIEMBROS DE NUETRA EMPRESA</strong></h4>
            <h2 class="text-gray-dark"><strong>Conoce a nuestro equipo</strong></h2>
        </div>
        <div class="ui grid">
            <div class="doubling four column row">
                @for ($i = 0; $i < 4; $i++)
                <div class="column">
                    <div class="ui card employer off-border-shadows bg-transparent">
                        <div class="image">
                            <img src="{{asset('assets/img/sistema/02.png')}}">
                        </div>
                        <div class="content">
                            <h4 class="center aligned text-white header">Martha Lopez</h4>
                            <div class="center aligned text-white description">
                                Web development
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
</div>
