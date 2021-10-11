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
                <div class="overlay" onclick="showProjectDetails({{ $project->id }});">
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