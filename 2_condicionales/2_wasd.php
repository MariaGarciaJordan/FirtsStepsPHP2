<?php
// Crear un programa que emule los controles de un videojuego:

// Si pulso w:'adelante'
// Si pul a: 'izquierda'
// Si pulso s: 'abajo'
// Si pulso d: 'derecha'


$teclaEnUso= 'w';

switch ($teclaEnUso) {
    case 'w': echo'adelante';
    break;

    case 'a': echo'izquierda';
    break;

    case 's': echo 'abajo';
    break;

    case 'd': echo 'derecha';
    break;
    
    default: echo 'tecla no reconocida';
    break;
}