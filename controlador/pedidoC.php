<?php
// Incluir configuración de la base de datos
include '../config.php';  // Asegúrate de que la ruta sea correcta

// Iniciar sesión solo si no está activa
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Verificar si el usuario está autenticado
if (!isset($_SESSION['IdUsuario'])) {
    die("Error: Usuario no autenticado. Por favor, inicia sesión.");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capturar los datos del formulario
    $codigopostal = $_POST['codigopostal'];
    $estado = $_POST['estado'];
    $ciudad = $_POST['ciudad'];
    $calle = $_POST['calle'];
    $idUsuario = $_SESSION['IdUsuario']; // Obtener el ID del usuario que está iniciando sesión

    try {
        // Verifica si $pdo está definido
        if (!$pdo) {
            throw new Exception("La conexión con la base de datos no está establecida.");
        }

        // Preparar la consulta SQL para insertar la dirección
        $sql = "INSERT INTO direccion (IdUsuario, codigopostal, estado, ciudad, calle) 
                VALUES (:idUsuario, :codigopostal, :estado, :ciudad, :calle)";
        
        $stmt = $pdo->prepare($sql);
        // Vincular los parámetros
        $stmt->bindParam(':idUsuario', $idUsuario);
        $stmt->bindParam(':codigopostal', $codigopostal);
        $stmt->bindParam(':estado', $estado);
        $stmt->bindParam(':ciudad', $ciudad);
        $stmt->bindParam(':calle', $calle);
        
        // Ejecutar la consulta
        $stmt->execute();

        // Obtener el último IdDireccion insertado
        $IdOrigen = $pdo->lastInsertId();

        // Redirigir a pdestino.php con el parámetro IdOrigen
        header("Location: ../vista/pdestino.php?IdOrigen=" . $IdOrigen);
        // echo $IdOrigen;
        exit; // Asegúrate de detener el script después de la redirección
    } catch (PDOException $e) {
        echo "Error al guardar la dirección: " . $e->getMessage();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
?>
