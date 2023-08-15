<?php
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
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];

// Realizar la consulta para insertar los datos en la base de datos
$sql = "INSERT INTO `newac`(`nombre`, `email`, `password`) VALUES ('$nombre','$email','$password')";
$result = $conn->query($sql);

// Verificar si se insertaron correctamente los datos
if ($result === TRUE) {
    // Datos insertados correctamente
    echo "Registro exitoso";
} else {
    // Error al insertar los datos
    echo "Error en el registro: " . $conn->error;
}

// Cerrar la conexión con la base de datos
$conn->close();
header('Location: publicar.html');
?>