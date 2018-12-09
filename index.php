<?php

// Iniciamos las variables de sesión
if(session_status()==PHP_SESSION_NONE){
	session_start();
}


error_reporting(E_ALL);
ini_set('display_errors', '1');

// Declaramos los archivos .php que nos hacen falta
require "comun.php";
	
	
	// Empezamos a generar código html mediante php
	HTMLinicio();


	// Si no se ha solicitado ninguna página (se entra por
	// primera vez) mostramos el contenido de la página inicio
	if(!isset($_GET["p"]))
		$_GET['p'] = 'Inicio';


	// Si $_GET["p"] == "Inicio" mostramos el header (imagen)
	if($_GET["p"] == "Inicio")
		HTMLheaderInicial();
	
	
	// Mandamos que se muestre el navegador mandando como elemento
	// activo aquel que haya sido seleccionado
	HTMLnav($_GET["p"]);


	// Si se está identificado mostramos el navegador correspondiente
	// al tipo de usuario identificado
	if(isset($_SESSION["usuario"])){
		if($_SESSION["tipo"] == 'admin'){
			HTMLnavAdmin($_GET["p"]);
		}
		if($_SESSION["tipo"] == 'gestor'){
			HTMLnavGestor($_GET["p"]);
		}
	}
	

	switch($_GET["p"]){
		
		// En el caso de que se elija inicio desde el navegador mostramos
		// el contenido de la página inicio
		case 'Inicio':
			include "inicio.html";
			break;
		
		// En el caso de Algoritmo de Euclides mostramos la página
		// correspondiente
		case 'Algoritmo de Euclides':
			include "AlgoritmoEuclides.php";
			break;
			
	

	}


	HTMLfooter();
	HTMLfin();


?>
