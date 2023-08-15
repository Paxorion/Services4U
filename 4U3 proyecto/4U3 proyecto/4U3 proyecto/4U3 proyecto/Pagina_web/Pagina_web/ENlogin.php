<?php
  header('Access-Control-Allow-Origin: ');
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
// Archivo login.php

// Establecer la conexión con la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "services4u";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si hay errores de conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener los valores enviados desde el formulario
$email = $_POST['email'];
$password = $_POST['password'];

// Realizar la consulta para verificar las credenciales del usuario
$sql = "SELECT * FROM `newac` WHERE `email` = '$email' AND `password` = '$password'";
$result = $conn->query($sql);

// Verificar si se encontró un registro en la base de datos
if ($result->num_rows > 0) {
    // Credenciales válidas, el usuario ha iniciado sesión correctamente
    echo "Inicio de sesión exitoso";
} else {
    // Credenciales inválidas, el usuario no ha podido iniciar sesión
    echo "Credenciales inválidas";
}

// Cerrar la conexión con la base de datos
$conn->close();
header('Location: ENpublicar.html');
?>