<i class="close icon" style="color: white;"></i>    
<div class="image content modal-content">
    <img class="image image-modal" src="{{ asset('assets/img/projects-porta/'.$proyecto->porta_image) }}">
	<div class="description">
		<div class="ui items head-modal">
	    	<div class="item project-name-modal">{{ $proyecto->name }}</div>

	    	<a class="ui image label" style="background-color: #3bbce8 !important; color: white;">
			  	<img src="{{ asset('assets/img/allys-logo/circular/'.$proyecto->ally->logo_circular) }}">
			  		{{ $proyecto->ally->name }}
			</a>
	    	
	    	<div class="item project-description-modal">{{ $proyecto->description }}</div>
	    	<div class="item project-link-modal"><a href="{{ $proyecto->link }}" target="_blank">Visitar el sitio <i class="external alternate icon"></i></a></div>
		</div>
	    <div class="item technologies-modal">
	    	@foreach ($proyecto->technologies as $technology)
	    		<div class="ui label">
  					<i class="thumbtack icon"></i> {{ $technology->name }}
				</div>
			@endforeach
		</div>
		<div class="item technologies-modal">
	    	@foreach ($proyecto->tags as $tag)
				<a class="ui teal tag label">{{ $tag->name }}</a>
			@endforeach
		</div>
    </div>
</div>