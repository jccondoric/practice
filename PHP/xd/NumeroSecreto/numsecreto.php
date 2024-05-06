<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<h1>Numero Secreto</h1>
</head>
<body>

<?php

if(!isset($_GET['numero'])){

	if(!isset($_GET['aleatorio'])){

		$intentos = 0;
		$aleatorio = rand(1,100);

	}else{

		$intentos = $_GET['intentos'];
		$aleatorio = $_GET['aleatorio'];
	}
	
	echo "<form action = 'numsecreto.php' method = 'get'>
	<input type = 'number' name = 'numero'>
	<input type = 'hidden' name = 'aleatorio' value = '$aleatorio'>
	<input type = 'hidden' name = 'intentos' value = '$intentos'>
	
	<input type = 'submit'>
	
	</form>";

}else{

	$n = $_GET['numero'];
	$aleatorio = $_GET['aleatorio'];
	$intentos = $_GET['intentos'];
	$intentos++;

	echo "Tu numero es $n <br>";

	if($n > $aleatorio){

		echo "Mi numero es menor";
	}else if ($n < $aleatorio){
		echo "Mi numero es mayor";
	}
	else{
		echo "Acertaste necesitaste $intentos intentos";
	}

	echo "<br><a href='numsecreto.php?aleatorio=$aleatorio&intentos=$intentos'>Seguir Jugando/a>";
}

?>
	
</body>
</html>