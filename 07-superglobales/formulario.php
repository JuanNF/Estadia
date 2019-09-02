<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario</title>
</head>
<body>
	<h1>Formulario PHP</h1>

	<form method="GET" action="recibir.php">
		<p>
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" />
		</p>
		<p>
			<label for="apellidos">Apellidos</label>
			<input type="text" name="apellidos" />
		</p>

		<input type="submit" value="Enviar datos" />
	</form>
</body>
</html>