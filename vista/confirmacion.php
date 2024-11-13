<?php
include '../vista/layout/lateralCli.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Obtener valores de la sesión
$IdOrigen = isset($_SESSION['IdOrigen']) ? $_SESSION['IdOrigen'] : null;
$IdDestino = isset($_SESSION['IdDestino']) ? $_SESSION['IdDestino'] : null;

?>

<main id="nuevos-envios">
    <div class="nuevos-envios" id="nuevosEnviosSection">
        <h2>Datos del envío</h2>
        
        <p>ID Usuario: 
            <?php echo isset($_SESSION['IdUsuario']) ? $_SESSION['IdUsuario'] : 'No disponible'; ?>
        </p>

        <?php
            if ($IdOrigen && $IdDestino) {
                echo "ID Origen: " . htmlspecialchars($IdOrigen) . "<br>";
                echo "ID Destino: " . htmlspecialchars($IdDestino) . "<br>";
            } else {
                echo "No se han recibido los IDs correctamente.";
            }
        ?>

        <form class="formulario-envio" id="formularioEnvio" method="post" action="../controlador/confC.php">
            <label for="remitente-nombre">Nombre del Destinatario:</label>
            <input type="text" name="Nombre" placeholder="Nombre Completo" required>
            <input type="tel" name="telefono" placeholder="Teléfono">

            <label for="remitente-direccion">Datos del paquete:</label>
            <input type="text" name="Descripcion" placeholder="Descripción: Caja de lápices" required>
            <input type="text" name="Tamano" placeholder="Tamaño: 10 x 10 cm" required>
            <input type="text" name="Peso" placeholder="Peso: 200gr" required>

            <label for="metodo-envio">Método de envío:</label>
            <select name="MetodoEnvio" required>
                <option value="Express">Express</option>
                <option value="Estandar">Estándar</option>
                <option value="Economico">Económico</option>
            </select>

            <button type="submit" id="siguiente">Siguiente</button>
        </form>

    </div>
</main>
