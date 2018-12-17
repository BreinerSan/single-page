<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Mensaje nuevo</title>
</head>
<body>
	<h3>Hola,</h3>

	<p>Has recibido un mensaje de parte de tu pagina web con los siguientes datos.</p>

	<p><strong>Nombre: </strong> {{ $contact['name'] }}</p> 
	<p><strong>E-mail:</strong> {{ $contact['email'] }}</p> 
	<p><strong>Asunto: </strong> {{ $contact['subject'] }}</p> 
	<p><strong>Mensaje: </strong> {{ $contact['message'] }}</p>
	
</body>
</html>