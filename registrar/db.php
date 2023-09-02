<?php
$host = "localhost";
$usuario = "root";
$passwwor = "";
$db = "vehicar";

//crear conexion con nuestra base de datos
$conn = mysqli_connect($host, $usuario, $passwwor, $db);

// Verificar la conexión
if (!$conn) {
    die("error de conexion: " . mysqli_connect_error());
}