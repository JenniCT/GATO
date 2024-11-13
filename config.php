

<?php

$host = 'localhost'; // o la IP de tu servidor de base de datos
$db = 'gato';
$user = 'root';
$pass = 'i27bg2hhV_';

try {
    // Crear una nueva instancia de PDO para conectar a la base de datos
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    // Configurar PDO para que lance excepciones en caso de error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Si ocurre un error de conexión, mostramos el mensaje de error
    echo 'Error al conectar con la base de datos: ' . $e->getMessage();
    exit;
}
?>
