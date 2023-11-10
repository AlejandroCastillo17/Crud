
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>editar usuario</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

<?php

	include_once "conexion.php";

	if (isset($_GET['fantasma'])) {
		
		$sql = "UPDATE usuarios SET usuario = '" . $_GET['nombre'] . "', pasword = '" . $_GET['pass'] . "', email = '" . $_GET['email'] ."' WHERE ( id = " . $_GET['id'] ." ) ";
		$resultado2 = mysqli_query($conn, $sql);
		
?>

	
		<div class="alert alert-success" role="alert">
		  Usuario editado con exito
		</div>

<?php

	}


	if (isset($_GET['id'])) 
	{
		$sql = "SELECT * FROM usuarios WHERE(id = " . $_GET['id'] .")";
		$resultado = mysqli_query($conn, $sql);

		while ($fila = mysqli_fetch_assoc($resultado)) 
		{
			?>

			<div class="botonera">
				<form method="get">
					<div class="form-group">
				    	<label for="exampleInputEmail1">Nombre de Usuario</label>
				    	<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Usuario" name="nombre" value="<?php echo $fila ['usuario'] ?>">
				  	</div>
				  	<div class="form-group">
				    	<label for="exampleInputPassword1">Contraseña</label>
				    	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="pass"  value="<?php echo $fila ['pasword'] ?>">
				  	</div>
					<label for="exampleInputEmail1">Email</label>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1">@</span>
						</div>
						<input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" placeholder="Email" name="email"  value="<?php echo $fila ['email'] ?>">
					</div>
					<input type="hidden" name="fantasma" value="editando">
					<input type="hidden" name="id" value="<?php echo $fila ['id'] ?>">
					<button type="submit" class="btn btn-dark"> Guardar </button>
				</form>
				<br>
				<a href="usuarios.php">
					<button type="button" class="btn btn-dark"> Volver </button>
				</a>
			</div>

			<?php


		}

		?>







		<?php
	}
?>


<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>