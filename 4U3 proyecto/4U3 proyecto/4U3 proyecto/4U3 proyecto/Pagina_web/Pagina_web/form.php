<?php
// Archivo form.php

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
$nombreServicio = $_POST['nombreServicio'];
$ubicacion = $_POST['ubicacion'];
$numeroCelular = $_POST['numeroCelular'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];

// Procesar y almacenar las imágenes
$fotos = array();

if (isset($_FILES['fotos']) && !empty($_FILES['fotos']['name'][0])) {
    $numFiles = count($_FILES['fotos']['name']);
    
    for ($i = 0; $i < $numFiles; $i++) {
        $fileTmpPath = $_FILES['fotos']['tmp_name'][$i];
        $fileName = $_FILES['fotos']['name'][$i];
        $fileSize = $_FILES['fotos']['size'][$i];
        $fileType = $_FILES['fotos']['type'][$i];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
        $uploadFileDir = './uploads/';
        $dest_path = $uploadFileDir . $newFileName;

        if (move_uploaded_file($fileTmpPath, $dest_path)) {
            $fotos[] = $dest_path;
        }
    }
}

// Convertir las rutas de las imágenes en una cadena separada por comas
$fotosStr = implode(",", $fotos);

// Realizar la consulta para insertar los datos en la base de datos
$sql = "INSERT INTO `formulario`(`nombreServicio`, `fotos`, `ubicacion`, `numeroCelular`, `precio`, `descripcion`) VALUES ('$nombreServicio','$fotosStr','$ubicacion','$numeroCelular','$precio','$descripcion')";
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