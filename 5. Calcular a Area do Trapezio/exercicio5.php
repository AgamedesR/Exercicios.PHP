<?php

$base_maior = $_POST['base_maior'];
$base_menor = $_POST['base_menor'];
$altura_do_trapezio = $_POST['altura_do_trapezio'];

$area_do_trapezio = (($base_maior + $base_menor) * $altura_do_trapezio) / 2;

echo "A área do trapézio é de $area_do_trapezio";