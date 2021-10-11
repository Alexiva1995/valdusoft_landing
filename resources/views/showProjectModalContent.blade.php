<div class="row">
    <div class="col-xl-4 col-lg-4 col-md-4 col-12">
        <img src="https://clients.valdusoft.com/uploads/images/projects/{{$project->logo}}" class="img-fluid" alt="{{ $project->name }}">
    </div>
    <div class="col-xl-8 col-lg-8 col-md-8 col-12">
        <div class="text-white mt-2">
            <h1>{{ $project->name }}</h1>
        </div>
        <div class="text-white mt-2">
            <h5>{{ $project->description }}</h5>
        </div>
        @if (!is_null($project->country))   
            <div class="text-white mt-2">
                <h5>País: <b>{{ $project->country->name }}</b></h5>
            </div>
        @endif
        @if (!is_null($project->link))   
            <div class="text-white mt-3">
                <h6>Link de Visita: <b><a class="text-white" href="{{ $project->link }}" target="_blank">{{ $project->link }}</a></b></h6>
            </div>
        @endif
        <div class="row mt-3">
            @foreach ($project->tags as $tag)
                <div class="col-xl-4 col-lg-4 col-md-6 col-12 pb-2">
                    <div class="text-center font-weight-bold" style="background-color: white; border-radius: 25px; padding: 10px 20px;">
                        <img src="{{ asset('assets/bootstrap-icons-1.5.0/bookmark-star.svg') }}" alt=""> {{ $tag->name }}
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row mt-4">
            @foreach ($project->technologies as $technology)
                <div class="col-xl-3 col-lg-3 col-md-4 col-6 pb-2">
                    <div class="text-center font-weight-bold text-white" style="background-color:#650865; border: solid 1px white; border-radius: 25px; padding: 10px 20px;">
                        <img src="{{ asset('assets/bootstrap-icons-1.5.0/award.svg') }}" alt=""> {{ $technology->name }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>  