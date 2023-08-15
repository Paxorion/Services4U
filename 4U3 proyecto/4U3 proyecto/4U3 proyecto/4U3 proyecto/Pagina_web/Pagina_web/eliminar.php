<?php
  header('Access-Control-Allow-Origin: ');
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

// Archivo delete.php

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

// Obtener el ID del registro a eliminar
$id = $_POST['idUsuario'];

// Realizar la consulta para eliminar el registro
$sql = "DELETE FROM `newac` WHERE `idUsuario` = '$id'";
$result = $conn->query($sql);

if ($result === TRUE) {
    // El registro se eliminó correctamente
    echo "Registro eliminado exitosamente";
} else {
    // Ocurrió un error al eliminar el registro
    echo "Error al eliminar el registro: " . $conn->error;
}

// Cerrar la conexión con la base de datos
$conn->close();
?>