<?php
$serverName = "localhost\\SQLEXPRESS"; // Nombre de tu instancia SQL Express
$database = "Ensayo";                  // Nombre de tu base de datos

// Configuración para conexión con autenticación de Windows
$connectionInfo = array(
    "Database" => $database,
    "CharacterSet" => "UTF-8"
);

$conn = sqlsrv_connect($serverName, $connectionInfo);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
} else {
    echo "✅ Conexión establecida con autenticación de Windows";
}
?>

