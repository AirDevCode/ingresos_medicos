<?php
$servidor = "localhost"; 
$usuario = "root";
$contrasena = "";
$baseDeDatos = "hospital_db";


$conn = new mysqli($servidor, $usuario, $contrasena, $baseDeDatos);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$id_personal = $_POST['id_personal'];
$fecha = $_POST['fecha'];
$hora_ingreso = $_POST['hora_ingreso'];
$hora_salida = $_POST['hora_salida'];
$observaciones = $_POST['observaciones'];


$sql = "INSERT INTO registros_ingresos_salidas (id_personal, fecha, hora_ingreso, hora_salida, observaciones)
VALUES ('$id_personal', '$fecha', '$hora_ingreso', '$hora_salida', '$observaciones')";


if ($conn->query($sql) === TRUE) {
    echo "Registro guardado exitosamente.";
} else {
    echo "Error al guardar el registro: " . $conn->error;
}

$conn->close();
?>
