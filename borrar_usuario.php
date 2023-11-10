
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>borrar usuario</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

<?php

	if (isset($_GET['id'])) 
	{
		include_once "conexion.php";
		$sql = "DELETE FROM  usuarios WHERE id= " . $_GET['id'];
		$resultado = mysqli_query($conn, $sql);

		?>

		<div class="alert alert-danger" role="alert">
		  Usuario eliminado con exito
		</div>

		<?php
	}
?>


	<a href="usuarios.php">
		<button type="button" class="btn btn-dark"> Volver </button>
	</a>	
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>