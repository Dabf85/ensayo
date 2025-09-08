<?php
// Crear/conectar la base de datos SQLite
$db = new PDO('sqlite:ensayo.db');

// Crear la tabla usuarios si no existe
$db->exec("CREATE TABLE IF NOT EXISTS usuarios (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nombre TEXT NOT NULL,
    apellido TEXT NOT NULL,
    dni TEXT NOT NULL
)");

// Preparar e insertar los datos del formulario
$stmt = $db->prepare("INSERT INTO usuarios (nombre, apellido, dni) VALUES (?, ?, ?)");
$stmt->execute([
    $_POST['nombre'],
    $_POST['apellido'],
    $_POST['dni']
]);

echo "¡Usuario guardado correctamente!";
?>

