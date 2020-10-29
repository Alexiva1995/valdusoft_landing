<!DOCTYPE hmtl>
<html>
<head>
    <title>Mensaje recibido</title>
</head>

<body>
    <p><strong>Recibiste un mensaje de: </strong> {{$msg['name'] }} - {{$msg['email']}}</p>
    <p><strong>Asunto: </strong>{{$msg['subject']}}  </p>
    <p><strong>Teléfono: </strong>{{$msg['phone']}}  </p>
    <p><strong>Mensaje: </strong>{{$msg['message']}}  </p>

</body>
</html>
