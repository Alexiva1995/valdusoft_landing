<form id="form_data_projects">
    <input type="hidden" id="meta_token" value="{{ csrf_token() }}">
    <input type="hidden" name="listedProjects" id="listedProjects" value="{{ json_encode($listedProjects) }}">
    <input type="hidden" name="totalProjects" id="totalProjects" value="{{ $totalProjects }}">
    <input type="hidden" name="cantProjects" id="cantProjects" value="{{ $cantProjects }}">
    <input type="hidden" name="tag_id" id="tag_id" value="{{ $tag_id }}">
</form>
@foreach($projects as $project)
    <div class="column">
        <div class="container card-works" style="background: url('assets/img/projects-porta/{{$project->porta_image}}'); background-color: #3bbce8; background-size: cover;">
            <div class="overlay" data-target="#image-modal" data-toggle="modal" onclick="showProject({{$project->id}});">
                <div class="items"></div>
                <div class="items company">
                    <img class="ui middle aligned tiny circular image" src="assets/img/allys-logo/circular/{{$project->ally->logo_circular}}">
                </div>
                                  
                <div class="items head">
                    <p>{{$project->name}}<br></p>
                </div>
                <div class="items category">
                    <p>{{$project->tag->name}}</p>
                </div>
            </div>
        </div>
    </div>
@endforeach