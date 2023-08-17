<?php
// Definición de los parámetros de conexión a la base de datos
$servidor = "localhost"; // Dirección del servidor de la base de datos
$db = "yondos"; // Nombre de la base de datos
$username = "root"; // Nombre de usuario de la base de datos
$password = ""; // Contraseña del usuario de la base de datos

try {
    // Creación de una nueva conexión PDO utilizando los parámetros proporcionados
    $conexion = new PDO("mysql:host=$servidor;dbname=$db", $username, $password);
    
    // Comentario deshabilitado: echo "Conexión exitosa.";
} catch (Exception $e) {
    // Si ocurre una excepción (error) durante la conexión, se mostrará el mensaje de error
    echo $e->getMessage();
}
?>
