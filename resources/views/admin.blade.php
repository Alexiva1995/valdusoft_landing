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
	<div class="container">
		Proyectos

		<table class="table">
			<thead>
				<th>ID</th>
				<th>Nombre</th>
				<th>Link</th>
				<th>Descripción</th>
				<th>Aliado</th>
				<th>Etiquetas</th>
				<th>Tecnologías</th>
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
							<a class="btn btn-primary" href="{{ route('admin.edit-project', $proyecto->id) }}"><i class="fa fa-pencil"></i></a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</body>
</html>