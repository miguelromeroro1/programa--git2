<?php
// Obtén los datos del formulario
$email = $_POST['email'];
$userPassword = $_POST['password'];

// Conecta a la base de datos MySQL
$servername = "127.0.0.1";
$port = "33065";
$username = "root";
$dbPassword = ""; // Si tienes una contraseña configurada, inclúyela aquí
$dbname = "login";

$conn = new mysqli($servername, $username, $dbPassword, $dbname);

// Verifica si la conexión a la base de datos fue exitosa
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Inserta los datos en la tabla correspondiente
$sql = "INSERT INTO usuarios (email, password) VALUES ('$email', '$userPassword')";

if ($conn->query($sql) === TRUE) {
    echo "Datos almacenados correctamente.";
} else {
    echo "Error al almacenar los datos: " . $conn->error;
}

// Cierra la conexión a la base de datos
$conn->close();
?>
