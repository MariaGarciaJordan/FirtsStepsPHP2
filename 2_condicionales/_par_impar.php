<?php 

// crea un fchero que muestre un numero aleatorio entre 1 y 100 que diga si es par o impar
// utiliza constantes para el minimo y el maximo
// define (nombre,valor)

define('MIN', 1);
define('MAX', 100);

$numero = rand(MIN, MAX);

        if ($numero % 2 == 0) {
            echo "Par";
        } else {
            echo "Impar";
        }
?>