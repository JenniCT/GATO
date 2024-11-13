<?php 
include "../vista/layout/lateralCli.php"; 

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Obtener IdOrigen desde la URL y verificar que existe
if (isset($_GET['IdOrigen'])) {
    $IdOrigen = $_GET['IdOrigen'];
    $_SESSION['IdOrigen'] = $IdOrigen;  // Almacenar en sesión
} else {
    die("Error: IdOrigen no recibido en la URL.");
}

?>

<main id="nuevos-envios">
    <div class="nuevos-envios" id="nuevosEnviosSection">
        <h2>Dirección de destino</h2>
        
        <p>ID Usuario: 
            <?php echo isset($_SESSION['IdUsuario']) ? $_SESSION['IdUsuario'] : 'No disponible'; ?>
        </p>

        <p>IdOrigen: <?php echo htmlspecialchars($IdOrigen ?? 'No disponible'); ?></p>

        <form class="formulario-envio" id="formularioEnvio" method="post" action="../controlador/pdestinoC.php">
            <label for="destinatario-direccion">Dirección del Destinatario:</label>
            <input type="text" name="codigopostal" placeholder="Código Postal" required>
            <input type="text" name="estado" placeholder="Estado" required>
            <input type="text" name="ciudad" placeholder="Ciudad" required>
            <input type="text" name="calle" placeholder="Calle" required>
            <button type="submit" id="siguiente">Siguiente</button>
        </form>
    </div>
</main>
