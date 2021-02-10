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
            @foreach($projects_all as $project)
            <div class="column">
                <!--<img src="{{asset('assets/img/sistema/Logo-1.png')}}" alt="">-->
                <div class="container card-works" 
                      style="background: url('assets/img/projects-porta/{{$project->porta_image}}');
                                background-color: #3bbce8;
                                
                                background-size: cover;">
                        <div class="overlay" data-target="#image-modal" data-toggle="modal" onclick="showProject( {{ $project->id }} )">
                          <div class = "items"></div>
                           <div class = "items company">
                                <img class="ui middle aligned tiny circular image " src="assets/img/allys-logo/circular/{{$project->ally->logo_circular}}" >
                            </div>
                            {{-- <div class = "items head">
                                <img class="ui middle aligned tiny circular image " src="assets/img/allys-logo/circular/{{$project->ally->logo_circular}}" >
                            </div> --}}
                              
                          <div class = "items head">
                            {{-- <img class="ui middle aligned tiny circular image" src="assets/img/allys-logo/circular/{{$project->ally->logo_circular}}"> --}}
                            {{-- <p><img class="ui middle aligned tiny circular image" src="assets/img/allys-logo/circular/{{$project->ally->logo_circular}}"></p>                               --}}
                            
                            <p>    {{$project->name}} <br>   </p>
                          </div>
                          <div class = "items category">
                                <p>{{$project->tag->name}} </p>
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
                    @if($tag->name == 'Apps' )
                    @foreach($projects->where('tag_id', 1)->take(8) as $project)
                        @include('landing.componentes.partials.section_project_tab')
                     @endforeach
                    @endif

                    @if($tag->name == 'Dise単o web' )
                         @foreach($projects->where('tag_id', 2)->take(8) as $project)
                             @include('landing.componentes.partials.section_project_tab')
                        @endforeach
                    @endif

                     @if($tag->name == 'Desarrollo web' )
                            @foreach($projects->where('tag_id',3)->random(8) as $project)
                             @include('landing.componentes.partials.section_project_tab')
                            @endforeach
                    @endif
                    
                    @if($tag->name == 'Dise単o grafico' )
                         @foreach($projects->where('tag_id',4)->take(8) as $project)
                             @include('landing.componentes.partials.section_project_tab')
                         @endforeach
                    @endif
                </div>
            </div>
        </div>
    @endforeach
    <!--EndContent tab-->
</div>