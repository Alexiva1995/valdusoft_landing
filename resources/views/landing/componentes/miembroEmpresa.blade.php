<div class="fondo2 p-start-end" style="background: url('{{asset('assets/img/sistema/Recurso-2logo.png')}}')" id="equipo">
    <div class="ui container mt-5">
        <div class="ui center aligned segment off-border-shadows">
            <h2 class="text-services"><strong>Miembros de nuestra empresa</strong></h2>
            <h2 class="text-gray-dark"><strong>Conoce a nuestro equipo</strong></h2>
        </div>
        <div class="ui grid center aligned">
            <div class="doubling four column row">
                @for ($i = 0; $i < 4; $i++)
                <div class="column">
                    <!--<div class="ui card employer off-border-shadows bg-transparent">
                        <div class="image">
                            <img src="{{asset('assets/img/sistema/02.png')}}">
                        </div>
                        <div class="content">
                            <h4 class="center aligned text-white header">Martha Lopez</h4>
                            <div class="center aligned text-white description">
                                Web development
                            </div>
                        </div>
                    </div>-->
                       <div class="flip-card">
                          <div class="flip-card-inner">
                            <div class="flip-card-front">
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
                            <div class="flip-card-back">
                             <div class="ui card employer off-border-shadows bg-transparent">
                                <div class="image">
                                    <img src="{{asset('assets/img/sistema/02.png')}}">
                                </div>
                                <div class="content">
                                    <p class="ui text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut magna libero, consequat non turpis non, porta ornare eros.</p>
                                </div>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
        
    </div>
</div>
