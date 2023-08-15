<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

$cnx = new PDO("mysql:host=localhost:3306;dbname=services4u", "root", "");

// Obtener información de la tabla "newac"
$res = $cnx->query("SELECT * FROM newac");
$data = array();

foreach ($res as $row) {
    $data[] = $row;
}

// Obtener información de otra tabla
$res_otra_tabla = $cnx->query("SELECT * FROM formulario");
$data_otra_tabla = array();

foreach ($res_otra_tabla as $row) {
    $data_otra_tabla[] = $row;
}

// Combinar los datos de ambas tablas en un solo array
$combined_data = array(
    "newac" => $data,
    "formulario" => $data_otra_tabla
);

echo json_encode($combined_data);
?>