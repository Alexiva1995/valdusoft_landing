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
</head>
<body>
	<div class="container mt-3">
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
                    <h3 class="text-white">Editar Proyecto</h3>
                </div>
            </div>
			<form method="POST" action="{{ route('admin.update-project') }}">
				@csrf
				<input type="hidden" name="project_id" value="{{ $proyecto->id }}">
				<div class="modal-body">
                    <div class="row">
                        <div class="col-12"> 
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" name="name" value="{{ $proyecto->name }}">
                            </div>
                        </div>
                        <div class="col-12"> 
                            <div class="form-group">
                                <label for="link">Link</label>
                                <input type="text" class="form-control" name="link" value="{{ $proyecto->link }}">
                            </div>
                        </div>
                        <div class="col-12"> 
                            <div class="form-group">
                                <label for="description">Descripción</label>
                                <input type="text" class="form-control" name="description" value="{{ $proyecto->description }}">
                            </div>
                        </div>
                        <div class="col-6"> 
                            <div class="form-group">
                                <label for="ally">Aliado</label>
                                <select class="form-control" name="ally_id" id="ally_id">
                                    @foreach ($aliados as $aliado)
                                        <option value="{{ $aliado->id }}" @if ($aliado->id == $proyecto->ally_id) selected @endif>{{ $aliado->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-6"> 
                            <div class="form-group">
                                <label for="status">Estado</label>
                                <select class="form-control" name="status" id="status">
                                    <option value="0" @if ($proyecto->status == 0) selected @endif>Inactivo</option>
                                    <option value="1" @if ($proyecto->status == 1) selected @endif>Activo</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12"> 
                            <div class="form-group">
                                <label for="ally">Etiquetas</label><br>
                                @foreach ($etiquetas as $etiqueta)
                                    @php
                                        $check = 0;
                                        if (in_array($etiqueta->id, $etiquetasActivas)){
                                            $check = 1;
                                        }
                                    @endphp
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="tag-{{$etiqueta->id}}" name="tags[]" value="{{ $etiqueta->id}}" @if ($check == 1) checked @endif>
                                        <label class="form-check-label" for="tag-{{$etiqueta->id}}">{{ $etiqueta->name }}({{ $etiqueta->id }})</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-12"> 
                            <div class="form-group">
                                <label for="ally">Tecnologías</label><br>
                                @foreach ($tecnologias as $tecnologia)
                                    @php
                                        $check2 = 0;
                                        if (in_array($tecnologia->id, $tecnologiasActivas)){
                                            $check2 = 1;
                                        }
                                    @endphp
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="technology-{{$tecnologia->id}}" name="technologies[]" value="{{ $tecnologia->id}}" @if ($check2 == 1) checked @endif>
                                        <label class="form-check-label" for="technology-{{$tecnologia->id}}">{{ $tecnologia->name }}({{ $tecnologia->id }})</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
				</div>
				<div class="modal-footer">
					<a type="button" href="{{ route('admin.projects') }}" class="btn btn-secondary">Cancelar</a>
				    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
				</div>
			</form>
    	</div>
	</div>
</body>
</html>