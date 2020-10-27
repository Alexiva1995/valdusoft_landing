<div id="portafolio" class="p-start-end">
    <div class="ui container mt-5">
        <h3 class="text-aliados">Portafolio</h3>
        {{-- Menu Grande --}}
        <div class="ui menu off-border-shadows pc">
            <div class="ui container">
                <div class="header item">
                    <h2><strong>Este es nuestro trabajo</strong></h2>
                </div>
                <div class="right menu">
                    <a class="item">
                        <span>Todos</span>
                    </a>
                    <a class="item">
                        <span>Apps</span>
                    </a>
                    <a class="item">
                        <span>Diseño Web</span>
                    </a>
                    <a class="item">
                        <span>Desarrollo Web</span>
                    </a>
                    <a class="item">
                        <span>Diseño Gráfico</span>
                    </a>
                </div>
            </div>
        </div>
        {{-- menu movil --}}
        <div class="ui menu off-border-shadows movil">
            <div class="ui dropdown icon item">
                <h2><strong>Este es nuestro trabajo</strong></h2>
                <i class="dropdown icon"></i>
                <div class="menu ">
                    <a class="item text-center">
                        <span>Todos</span>
                    </a>
                    <a class="item text-center">
                        <span>Apps</span>
                    </a>
                    <a class="item text-center">
                        <span>Diseño Web</span>
                    </a>
                    <a class="item text-center">
                        <span>Desarrollo Web</span>
                    </a>
                    <a class="item text-center">
                        <span>Diseño Gráfico</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="ui grid">
        <div class="doubling four column row portafolio">
            @foreach($projects as $project)
            <div class="column">
                <!--<img src="{{asset('assets/img/sistema/Logo-1.png')}}" alt="">-->
                <div class="container card-works">
                        <div class="overlay">
                          <div class = "items"></div>
                          <div class = "items company">
                                <p>VALDU<strong>SOFT</strong></p>
                              </div>
                          <div class = "items head">
                            <p>{{$project->name}}</p>
                          </div>
                          <div class = "items category">
                                <p>{{$project->tag->name}}</p>
                          </div>

                      </div>
                </div>
            </div>
            @endforeach
          </div>
          <div class="ui center aligned container">
                <button class="large ui inverted blue button">Ver más</button>
          </div>

    </div>
</div>
