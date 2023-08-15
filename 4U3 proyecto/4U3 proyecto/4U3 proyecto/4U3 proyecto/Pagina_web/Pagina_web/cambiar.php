<?php
header('Access-Control-Allow-Origin: ');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

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
$newPassword = $_POST['password'];

// Realizar la consulta para actualizar la contraseña del usuario
$sql = "UPDATE `newac` SET `password` = '$newPassword' WHERE `email` = '$email'";
$result = $conn->query($sql);

// Verificar si se actualizó la contraseña exitosamente
if ($result) {
    echo "Contraseña actualizada correctamente";
} else {
    echo "Error al actualizar la contraseña: " . $conn->error;
}

// Cerrar la conexión con la base de datos
$conn->close();
?>