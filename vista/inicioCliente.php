<?php 
include "../vista/layout/lateralCli.php"; 
include '../controlador/DatosUsuarioC.php';

?>

<main>  
    <form action="../controlador/datosClienteC.php" method="post" enctype="multipart/form-data">
        <div class="perfil_adentro">
            <div class="usuarioa">
                <!-- <img src="avatar.png" alt="Foto del usuario"> -->
                <div class="info-usuario">
                    <p>ID Usuario: 
                        <?php echo isset($datosUsuario['IdUsuario']) ? $datosUsuario['IdUsuario'] : 'No disponible'; ?>
                    </p>
                    <input type="text" name="Nombre" placeholder="Nombre" value="<?php echo isset($datosUsuario['Nombre']) ? $datosUsuario['Nombre'] : ''; ?>">
                    <input type="text" name="apPaterno" placeholder="Apellido paterno" value="<?php echo isset($datosUsuario['apPaterno']) ? $datosUsuario['apPaterno'] : ''; ?>">
                    <input type="text" name="apMaterno" placeholder="Apellido materno" value="<?php echo isset($datosUsuario['apMaterno']) ? $datosUsuario['apMaterno'] : ''; ?>">
                    <input type="email" name="Correo" placeholder="Correo" value="<?php echo isset($datosUsuario['correo']) ? $datosUsuario['correo'] : ''; ?>">
                    <input type="tel" name="Telefono" placeholder="Teléfono" value="<?php echo isset($datosUsuario['Telefono']) ? $datosUsuario['Telefono'] : ''; ?>">
                </div>
            </div>

            <!-- <h3>Dirección</h3>
            <div class="direccion">
                <input type="text" name="codigoPostal" placeholder="Código postal">
                <input type="text" name="estado" placeholder="Estado">
                <input type="text" name="municipio" placeholder="Municipio">
                <input type="text" name="colonia" placeholder="Colonia">
                <input type="text" name="calle" placeholder="Calle">
                <input type="text" name="numExterior" placeholder="No. Exterior">
                <input type="text" name="numInterior" placeholder="No. Interior">
            </div> -->
            <button type="submit" id="Guardar">Guardar</button>
        </div>
        
    </form> 
</main>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="js/d_empleado.js"></script>
</body>
</html>
