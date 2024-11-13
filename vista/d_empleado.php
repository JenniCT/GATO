<?php
include "../vista/layout/lateralEmp.php";
include "../Controlador/DatosUsuarioC.php";
?>
    <main>
        <div class="perfil_adentro">
            <div class="usuarioa">
                <div class="info-usuario">
                    <p>ID Usuario: <?php echo isset($datosUsuario['idUsuario']) ? $datosUsuario['idUsuario'] : 'No disponible'; ?> </p>
                    <input type="text" placeholder="<?php echo isset($datosUsuario['Nombre']) ? $datosUsuario['Nombre'] : ''; ?>">
                    <input type="email" placeholder="<?php echo isset($datosUsuario['correo']) ? $datosUsuario['correo'] : ''; ?>">
                    <input type="tel" placeholder="<?php echo isset($datosUsuario['Telefono']) ? $datosUsuario['Telefono'] : ''; ?>">
                </div>
            </div>
            
            <h3>Datos del empleado</h3>
            <div class="datos-empleado">
                <input type="text" placeholder="Área de trabajo">
                <input type="text" placeholder="Departamento">
                <input type="text" placeholder="Puesto">
                <input type="text" placeholder="Contacto de emergencia">
            </div>
            
            <h3>Dirección</h3>
            <div class="direccion">
                <input type="text" placeholder="Código postal">
                <input type="text" placeholder="Estado">
                <input type="text" placeholder="Municipio">
                <input type="text" placeholder="Colonia">
                <input type="text" placeholder="Calle">
                <input type="text" placeholder="No. Exterior">
                <input type="text" placeholder="No. Interior">
            </div>
        </div>
        
    </main>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="js/d_empleado.js"></script>
</body>
</html>