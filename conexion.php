
<?php

$servidor= "localhost";
$db = "crud";
$usuario = "root";
$pass= "";

$conn = mysqli_connect($servidor, $usuario, $pass, $db);

if (!$conn) {
	echo "error al intentar conectar con la base de datos. " . mysqli_connect_erorr();
}

?>
