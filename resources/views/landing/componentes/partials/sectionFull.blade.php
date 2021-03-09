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
                <div class="ui top attached tabular menu" id="tags_section_pc">
                    <a class="item @if ($tag_id == 0) active @endif" id="0" onclick="loadNewTab(this.id);">Todos</a>
                    @foreach ($tags as $tag)
                        <a class="item @if ($tag_id == $tag->id) active @endif" id="{{$tag->id}}" onclick="loadNewTab(this.id);">{{$tag->name}}</a>
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
                <div class="ui top attached tabular menu" id="tags_section_movil">
                    <a class="item text-center @if ($tag_id == 0) active @endif" id="0"onclick="loadNewTab(this.id);">Todos</a>
                    @foreach ($tags as $tag)
                        <a class="item text-center @if ($tag_id == $tag->id) active @endif" id="{{$tag->id}}" onclick="loadNewTab(this.id);">{{$tag->name}}</a>
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
            <div class="doubling four column row portafolio" id="projects_section">
                <form id="form_data_projects">
                    <input type="hidden" id="meta_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="projects" id="projects" value="{{ $projects }}">
                    <input type="hidden" name="listedProjects" id="listedProjects" value="{{ json_encode($listedProjects) }}">
                    <input type="hidden" name="totalProjects" id="totalProjects" value="{{ $totalProjects }}">
                    <input type="hidden" name="cantProjects" id="cantProjects" value="{{ $cantProjects }}">
                    <input type="hidden" name="tag_id" id="tag_id" value="{{ $tag_id }}">
                </form>
                @foreach($projects as $project)
                    <div class="column">
                        <div class="container card-works" 
                          style="background: url('assets/img/projects-porta/{{$project->porta_image}}');
                                    background-color: #3bbce8;
                                    
                                    background-size: cover;">
                            <div class="overlay" data-target="#image-modal" data-toggle="modal" onclick="showProject({{ $project->id }});">
                                <div class = "items company">
                                    <img class="ui middle aligned tiny circular image " src="assets/img/allys-logo/circular/{{$project->ally->logo_circular}}" >
                                </div>
                                <div class="items head">
                                    <div class="item">{{$project->name}}</div>
                                    <div class="item technologies">
                                        @foreach ($project->technologies as $index => $technology)
                                            @if($index != $project->technologies_count - 1)
                                                {{ $technology->name }},
                                            @else
                                                {{ $technology->name }}.
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="items category">
                                    @foreach ($project->tags as $index => $tag)
                                        @if($index != $project->tags_count - 1)
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
            
        </div>
    </div>
    <!--EndContent tab-->