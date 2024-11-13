<?php
include '../config.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['IdUsuario'])) {
    die("Error: Usuario no autenticado. Por favor, inicia sesión.");
}

if (!isset($_SESSION['IdOrigen'])) {
    die("Error: IdOrigen no está definido.");
}

$IdOrigen = $_SESSION['IdOrigen'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $codigopostal = $_POST['codigopostal'];
    $estado = $_POST['estado'];
    $ciudad = $_POST['ciudad'];
    $calle = $_POST['calle'];
    $idUsuario = $_SESSION['IdUsuario'];

    try {
        if (!isset($pdo)) {
            throw new Exception("La conexión con la base de datos no está establecida.");
        }

        $sql = "INSERT INTO direccion (IdUsuario, codigopostal, estado, ciudad, calle) 
                VALUES (:idUsuario, :codigopostal, :estado, :ciudad, :calle)";
        
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':idUsuario', $idUsuario);
        $stmt->bindParam(':codigopostal', $codigopostal);
        $stmt->bindParam(':estado', $estado);
        $stmt->bindParam(':ciudad', $ciudad);
        $stmt->bindParam(':calle', $calle);
        
        $stmt->execute();

        // Guardar IdDestino en la sesión
        $IdDestino = $pdo->lastInsertId();
        $_SESSION['IdDestino'] = $IdDestino;

        // Redireccionar a la página de confirmación (sin pasar variables en la URL)
        header("Location: ../vista/confirmacion.php");
        exit;
        
    } catch (PDOException $e) {
        echo "Error al guardar la dirección: " . $e->getMessage();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
?>
