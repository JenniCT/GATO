<?php 
include "../vista/layout/lateralCli.php";
include '../controlador/pedidoC.php';

?>

<main id="nuevos-envios">
    <div class="nuevos-envios" id="nuevosEnviosSection">
        <h2>Registrar Nuevo Envío</h2> <br>
        
        <!-- Mostrar el ID de Usuario -->
        <!-- <p>ID Usuario: 
            <?php echo isset($_SESSION['IdUsuario']) ? $_SESSION['IdUsuario'] : 'No disponible'; ?>
        </p> -->

        <!-- Formulario para registrar nuevo envío -->
        <form class="formulario-envio" id="formularioEnvio" method="post" action="../controlador/pedidoC.php">
            <label for="remitente-nombre">Nombre del Remitente:</label>
            <input type="text" name="Nombre" placeholder="Nombre Completo" value="<?php echo $_SESSION['nombreCompleto'] ?? 'Nombre Completo'; ?>" required>
            <input type="tel" name="telefono" placeholder="Teléfono" value="<?php echo isset($datosUsuario['Telefono']) ? $datosUsuario['Telefono'] : ''; ?>">

            <label for="remitente-direccion">Dirección del Remitente:</label>
            <input type="text" name="codigopostal" placeholder="Código Postal" required>
            <input type="text" name="estado" placeholder="Estado" required>
            <input type="text" name="ciudad" placeholder="Ciudad" required>
            <input type="text" name="calle" placeholder="Calle" required>

            <button type="submit" id="siguiente">Siguiente</button>
        </form>

    </div>
</main>

<script>
    // Generación aleatoria del número de guía
    document.addEventListener('DOMContentLoaded', function () {
        // Función para generar un número de guía aleatorio
        function generarNumeroGuia() {
            const caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            let guia = '';
            for (let i = 0; i < 10; i++) {
                guia += caracteres.charAt(Math.floor(Math.random() * caracteres.length));
            }
            return guia;
        }

        // Asignar un número de guía aleatorio al campo de texto
        document.getElementById('numero-guia').value = generarNumeroGuia();
    });
</script>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="js/d_empleado.js"></script>
</body>
</html>
