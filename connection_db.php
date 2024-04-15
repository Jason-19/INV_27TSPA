<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "27ts_db";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
     // por si la connecion falla
     die("Conexión fallida: " . $conn->connect_error);
} else {
     // connecion exitosa 
     echo "";
}

// funion para las busquedas de los equipos 


