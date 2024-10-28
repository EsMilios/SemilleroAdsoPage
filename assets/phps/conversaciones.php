<?php
// getAudio.php
$conexion = mysqli_connect('localhost', 'root', '', 'adsoPage');

// Verifica la conexión
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Obtiene el nombre del archivo desde la URL
$nombreArchivo = isset($_GET['nombre']) ? $_GET['nombre'] : '';

// Consulta para obtener el audio
$query = "SELECT audio FROM conversaciones WHERE nombre = ?";
$stmt = $conexion->prepare($query);
$stmt->bind_param('s', $nombreArchivo);
$stmt->execute();
$stmt->store_result();

// Verifica si se encontró el archivo
if ($stmt->num_rows > 0) {
    $stmt->bind_result($audio);
    $stmt->fetch();

    header('Content-Type: audio/mp3');
    echo $audio;
} else {
    echo "Archivo no encontrado.";
}

$stmt->close();
mysqli_close($conexion);
?>
