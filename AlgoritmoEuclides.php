<?php

// Iniciamos las variables de sesión
if(session_status()==PHP_SESSION_NONE){
	session_start();
}

error_reporting(E_ALL);
ini_set('display_errors', '1');


echo <<< HTML

<script type="text/javascript">


// Función que nos muestra el procedimiento del algoritmo
// cuando clicamos en el botón correspondiente
function mostrarProcedimiento(){
    var x = document.getElementById("Procedimiento");
    if (x.className.indexOf("w3-show") == -1) { 
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}


// Función que ejecuta el algoritmo de Euclides y nos devuelve
// el máximo común divisor de dos números dados
function algoritmoEuclides(){
    
    // Pasamos a aplicar el algoritmo
    var a = parseInt(document.getElementById('a').value, 10);
    var b = parseInt(document.getElementById('b').value, 10);
    var mcd=0, u0=1, u1=0, v0=0, v1=1;
    var mod, aux;   // Variables Auxiliares

    if(!a) // Si a no está vacío
        a = 0;
    if(!b) // Si b no está vacío
        b = 0;

    if(a < 0) // Si a es negativo, tomamos valor absoluto
        a = -a;
    if(b < 0) // Si b es negativo, tomtamos valor absoluto
        b = -b;

    while(b > 0){

        // Calculamos u
        aux = u1;
        u1  = u0 - a/b * u1;
        u1  = Math.floor( u1 ); // Quitamos los decimales
        u0  = aux;

        // Calculamos v
        aux = v1;
        v1  = v0 - a/b * v1;
        v1  = Math.floor(v1); // Quitamos los decimales
        v0  = aux;

        // Calculamos el mcd
        mod = a%b;
        a = b;
        b = mod;

    }

    mcd = a;
    u0  = u0;
    v0  = v0;

    // Ponemos el resultado en el input id="resultado"
    document.getElementById('mcd').value = mcd;
    document.getElementById('u').value = u0;
    document.getElementById('v').value = v0;


    // Finalmente mostramos el div
    // que donde pondremos el resultado
    var x = document.getElementById("BloqueResultado");
    if (x.className.indexOf("w3-show") == -1)
        x.className += " w3-show";
}

</script>


	<main class="w3-container" id="Contenido">
		<div class="w3-container w3-center w3-margin">
			<h1>Algoritmo de Euclides</h1>
			<h5>Gracias a este algoritmo podemos conocer el máximo
                común divisor de dos números.
			</h5>
		</div>				
        
        

        <div class="w3-container w3-center w3-margin w3-padding-48">
            <div class="w3-row-padding w-margin w3-margin-left w3-margin-right">
                <div class="w3-center">
                    <h3>Introduzca los números:</h3>
                </div>
                <div class="w3-half">
                    <label>Primer Número (a):</label>
                    <input id="a" class="w3-input w3-border" type="number" placeholder="Ej: 25">
                </div>
                <div class="w3-half">
                    <label>Segundo Número (b):</label>
                    <input id="b" class="w3-input w3-border" type="number" placeholder="Ej: 100">
                </div>

            </div>


            <div class="w3-margin w3-center w3-margin">
                <button onclick="algoritmoEuclides()"
                    class="w3-button w3-padding-large w3-green
                    w3-xlarge w3-round">
                    Calcular
                </button>

                <div id="BloqueResultado" class="w3-center w3-row w3-margin w3-border w3-animate-zoom w3-hide">
                    <h3>Resultado</h3>
                    <div class="w3-container w3-col s4 w3-green w3-center">
                        <h5>Máximo común divisor:</h5>
                        <input id="mcd" class="w3-center w3-input w3-border w3-margin-bottom" type="text" readonly>
                    </div>
                    <div class="w3-container w3-col s4 w3-green w3-center">
                        <h5>U:</h5>
                        <input id="u"   class="w3-center w3-input w3-border w3-margin-bottom" type="text" readonly>
                    </div>
                    <div class="w3-container w3-col s4 w3-green w3-center">
                        <h5>V:</h5>
                        <input id="v"   class="w3-center w3-input w3-border w3-margin-bottom" type="text" readonly>
                    </div>
                </div>
            </div>
        </div>



        <div class="w3-container w3-center w3-margin">
            <div class="w3-dropdown-click">
                <button onclick="mostrarProcedimiento()" class="w3-button w3-black w3-round">
                    Ver el procedimiento del algoritmo
                </button>
                <div id="Procedimiento" class="w3-dropdown-content w3-bar-block w3-border w3-animate-zoom" style="opacity:0.9;">
                    <p class="w3-bar-item">
                    El algoritmo de Euclides nos devuelve el máximo
                    común divisor de dos números enteros.
                    
                    Para ello,
                    el procedimiento es el siguiente:<br><br>
                    Sean <i>a, b</i> dos
                    números enteros, y <i>a</i> distinto de 0, sabemos que <i>mcd(a, b) =
                    mcd(b, a mod b)</i>. Ejecutaremos este último paso hasta
                    que <i>a mod b = 0</i>, en ese momento tendremos <i>mcd(a,0)</i>
                    sabiendo que <i>a</i> es el máximo común divisor.
                    </p>
                </div>
            </div>
        </div>

	</main>
HTML;
?>