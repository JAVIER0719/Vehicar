<?php

$email = $_POST["email"];
$nom = $_POST["nam1"];
$ape1 = $_POST["ape1"];
$ape2 = $_POST["ape2"];
$typeusser = $_POST["type"];
$clave1 = $_POST["clave1"];
$date = $_POST["date"];
$horien = $_POST["seso"];
$doc = $_POST["num_doc"];

include 'db.php';

$sql = "INSERT INTO `clientes` (`nombre_completo`, `edad`, `nacionalidad`, `id`, `tipo_identif`, `licencia_cond`, `tipo_licencia`, `direccion`, `correo`, `telefono`, `clave`)
VALUES (\'javier osorio arango\', \'17\', \'clombiano\', \'1232\', \'tarjeta de identidad\', \'123\', \'c1\', \'8731de\', \'javier@gmail.com\', \'2342323\', \'12\')";


?>