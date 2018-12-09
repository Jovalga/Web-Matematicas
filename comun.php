<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

function HTMLinicio(){
	
echo <<< HTML

	<!DOCTYPE html>

	<html lang="es">
	
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="Jorge Valenzuela García">
		<title>Algoritmos matemáticos</title>
		<link href="Imagenes/icon.png" rel="shortcut icon" type="image/x-icon">	
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>

	<body>

HTML;
}
 



function HTMLfin(){
echo <<< HTML

	</body>
	</html>

HTML;
}




function HTMLheaderInicial(){
echo <<< HTML

		<header id="Cabecera">
		</header>

HTML;
}




function HTMLnav($activo){

echo <<< HTML
	
	<nav id="Navegador">
		<div class="w3-bar w3-blue">
HTML;

	$items = ["Inicio", "Algoritmo de Euclides"];

	foreach ($items as $k => $v)
		echo 
			 "<a class='w3-bar-item w3-button w3-card' href='index.php?p=".($v)."'>".($v)."</a>";
echo <<< HTML

		</div>
	</nav>

HTML;
}




function HTMLfooter(){
echo <<< HTML

	<footer class="w3-container w3-blue" id="Pie">

		<div class="copyright w3-padding" id="copy">
			&copy; 2018 por Jorge Valenzuela García. Todos los derechos reservados.
		</div>
			
	</footer>

HTML;
}

?>
