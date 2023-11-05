
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>crear_usuario</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

<?php

	if (isset($_GET['nombre'])) 
	{
		include_once "conexion.php";
		$sql = "INSERT INTO usuarios (usuario, pasword, email) VALUES ('" . $_GET['nombre'] . "','". $_GET['pass'] ."','". $_GET['email'] ."')";
		$resultado = mysqli_query($conn, $sql);

		?>

		<div class="alert alert-success" role="alert">
		  Usuario registrado con exito
		</div>

		<?php
	}
?>


<div class="botonera">
	<form method="get">
		<div class="form-group">
	    	<label for="exampleInputEmail1">Nombre de Usuario</label>
	    	<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Usuario" name="nombre">
	  	</div>
	  	<div class="form-group">
	    	<label for="exampleInputPassword1">Contraseña</label>
	    	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="pass">
	  	</div>
		<label for="exampleInputEmail1">Email</label>
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">@</span>
			</div>
			<input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" placeholder="Email" name="email">
		</div>
		<button type="submit" class="btn btn-dark"> Guardar </button>
	</form>
				<a href="usuarios.php">
					<button type="button" class="btn btn-dark"> Volver </button>
				</a>
</div>

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>