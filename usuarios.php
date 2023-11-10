
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>usuarios</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

<?php

	include_once "conexion.php";


		$sql = "SELECT * FROM usuarios";
		$resultado = mysqli_query($conn, $sql);

		

			?>
			<div class="botonera">
				<a href="crear_usuario.php"> <button  type= "button" class="btn btn-dark"> Crear Usuario </button> </a> <br> <br>
				<a href="index.php"> <button  type= "button" class="btn btn-dark"> Volver </button> </a> <br>
				<table class="table">
					<thead>
						<tr>
							<th scope="col">id</th>
							<th scope="col">Nombre</th>
							<th scope="col">Email</th>
							<th scope="col">Acciones</th>
						</tr>
					</thead>
					<tbody>
						<?php
						while ($fila = mysqli_fetch_assoc($resultado)) 
						{
						?>

						<tr>
							<td><?php echo $fila ['id'] ?></td>
							<td><?php echo $fila ['usuario'] ?></td>
							<td><?php echo $fila ['email'] ?></td>
							<td>
								<a href="editar_usuario.php?id=<?php echo $fila ['id'] ?>">
									<button type="button" class="btn btn-primary"> Editar </button>
								</a>
								<a href="borrar_usuario.php?id=<?php echo $fila ['id'] ?>">
									<button type="button" class="btn btn-danger"> borrar </button>
								</a>
							</td>
						</tr>

						<?php
						}

						?>
					</tbody>

				</table>
			</div>



<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>