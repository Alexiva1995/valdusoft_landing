<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Administrador</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/d6f2727f64.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

	<script>
		function cargar($proyecto){
			$("#name").val($proyecto.name);
			$("#link").val($proyecto.link);
			$("#description").val($proyecto.description);
	        $("#ally_id option[value="+$proyecto.ally_id+"]").attr("selected", true);
		}
	</script>
</head>
<body>
	<div class="m-5">
        @if (Session::has('msj-exitoso'))
			<div class="alert alert-success" role="alert">
		  		{{ Session::get('msj-exitoso') }}
			</div>
		@endif
          
        <div class="modal-content">
            <div class="modal-header" style="background-color: #00508f;">
                <div class="col-6">
                    <img src="https://valdusoft.com/assets/img/sistema/Logo.png" class="img-logo" width="300">
                </div>
                <div class="col-6 text-right">
                    <h1 class="text-white">Proyectos</h1>
                </div>
            </div>

            <div class="modal-body">
                <div class="mt-1 mb-3 text-center">
                   <button class="btn btn-primary" href="#createModal" data-toggle="modal"><i class="fa fa-plus-circle"></i> Nuevo Proyecto</button> 
                </div>
                
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Link</th>
                            <th>Descripción</th>
                            <th>Aliado</th>
                            <th>Etiquetas</th>
                            <th>Tecnologías</th>
                            <th>Estado</th>
                            <th>Acción</th>
                        </thead>
                        <tbody>
                            @foreach ($proyectos as $proyecto)
                                <tr>
                                    <td>{{ $proyecto->id }}</td>
                                    <td>{{ $proyecto->name }}</td>
                                    <td>{{ $proyecto->link }}</td>
                                    <td>{{ $proyecto->description }}</td>
                                    <td>{{ $proyecto->ally->name }}</td>
                                    <td>
                                        @foreach ($proyecto->tags as $tag)
                                            {{ $tag->name }}({{ $tag->id}}),
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($proyecto->technologies as $technology)
                                            {{ $technology->name }}({{ $technology->id}}),
                                        @endforeach
                                    </td>
                                    <td>
                                        @if ($proyecto->status == 0)
                                            <label style="padding: 5px 10px; border-radius: 10px; background-color: red; color: white;">Inactivo</label>
                                        @else
                                            <label style="padding: 5px 10px; border-radius: 10px; background-color: green; color: white;">Activo</label>
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('admin.edit-project', $proyecto->id) }}"><i class="fa fa-pencil"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4">{{ $proyectos->links() }}</div>
                    <div class="col-4"></div>
                </div>
            </div>
        </div>
	</div>

    <div class="modal" tabindex="-1" id="createModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nuevo Proyecto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('admin.store-project') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="link">Link</label>
                                <input type="text" class="form-control" name="link" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Descripción</label>
                                <input type="text" class="form-control" name="description" required>
                            </div>
                            <div class="form-group">
                                <label for="ally">Aliado</label>
                                <select class="form-control" name="ally_id" id="ally_id">
                                    @foreach ($aliados as $aliado)
                                        <option value="{{ $aliado->id }}">{{ $aliado->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="ally">Etiquetas</label><br>
                                @foreach ($etiquetas as $etiqueta)
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="tag-{{$etiqueta->id}}" name="tags[]" value="{{ $etiqueta->id}}">
                                        <label class="form-check-label" for="tag-{{$etiqueta->id}}">{{ $etiqueta->name }}({{ $etiqueta->id }})</label>
                                    </div>
                                @endforeach
                            </div>
                            <div class="form-group">
                                <label for="ally">Tecnologías</label><br>
                                @foreach ($tecnologias as $tecnologia)
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="technology-{{$tecnologia->id}}" name="technologies[]" value="{{ $tecnologia->id}}">
                                        <label class="form-check-label" for="technology-{{$tecnologia->id}}">{{ $tecnologia->name }}({{ $tecnologia->id }})</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar Proyecto</button>
                    </div>
                </form>
             </div>
        </div>
    </div>
</body>
</html>