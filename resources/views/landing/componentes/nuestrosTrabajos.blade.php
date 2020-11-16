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
                <!--TABS-->
                <div class="ui top attached tabular menu">
                <a class="item active" data-tab="todos">Todos</a>
                @foreach ($tags as $tag)
                    <a class="item" data-tab="item-{{$tag->id}}">{{$tag->name}}</a>
                @endforeach
                </div>
                <!--End Tabs-->
                </div>
            </div>
        </div>
        {{-- menu movil --}}
        <div class="ui menu off-border-shadows movil">
            <div class="ui dropdown icon item">
                <h2><strong>Este es nuestro trabajo</strong></h2>
                <i class="dropdown icon"></i>
                <div class="menu ">
                <!--TABS-->
                <div class="ui top attached tabular menu">
                <a class="item active text-center" data-tab="todos">Todos</a>
                @foreach ($tags as $tag)
                    <a class="item text-center" data-tab="item-{{$tag->id}}">{{$tag->name}}</a>
                @endforeach
                </div>
                <!--End Tabs-->
                </div>
            </div>
        </div>
    </div>
 <!--Content tab-->
    <div class="ui bottom attached tab segment active" data-tab="todos">
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
    </div>
    </div>
    @foreach ($tags as $tag)
        <div class="ui bottom attached tab segment" data-tab="item-{{$tag->id}}">
              <div class="ui grid">
                <div class="doubling four column row portafolio">
                    @foreach($projects as $project)
                    @if($project->tag->name == 'Apps' && $tag->name == 'Apps' )
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
                    @endif
                    @if($project->tag->name == 'Diseño Web' && $tag->name == 'Diseño Web' )
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
                    @endif
                     @if($project->tag->name == 'Desarrollo Web' && $tag->name == 'Desarrollo Web' )
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
                    @endif
                    @if($project->tag->name == 'Diseño gráfico' && $tag->name == 'Diseño gráfico' )
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
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    @endforeach
    <!--EndContent tab-->
</div>
