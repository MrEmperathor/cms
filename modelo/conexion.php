<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bikes_db";

// Create connection
$conexion = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conexion->connect_error) {
    exit("Conexion fallida: " . $conn->connect_error);
}