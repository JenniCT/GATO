<?php
class Registro {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function registrarUsuario($nombre, $aPaterno, $aMaterno, $correo, $contrasena) {
        // Verificamos si ya existe un usuario con el correo proporcionado
        $consulta = "SELECT Correo FROM usuarios WHERE correo = '$correo'";
        $resultado = $this->conexion->query($consulta);

        if ($resultado->num_rows > 0) {
            return "Ya existe un usuario con ese correo";
        } else {
            // Encriptamos la contraseña antes de almacenarla
            $contrasenaEncriptada = password_hash($contrasena, PASSWORD_DEFAULT);

            // Insertamos los datos del usuario, incluyendo la fecha de registro
            $consulta = "INSERT INTO usuarios (Nombre, apPaterno, apMaterno, correo, contrasena, fchRegistro) 
                VALUES ('$nombre', '$aPaterno', '$aMaterno', '$correo', '$contrasenaEncriptada', NOW())";

            if ($this->conexion->query($consulta) === TRUE) {
                return "Usuario agregado correctamente.";
            } else {
                return "Error al agregar usuario: " . $this->conexion->error;
            }
        }
    }
}
?>
