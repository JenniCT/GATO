<?php
class Registro {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function registrarUsuario($nombre, $apPaterno, $apMaterno, $correo, $contrasena) {
        // Usamos sentencias preparadas para evitar inyecciones SQL
        $consulta = "SELECT Correo FROM usuarios WHERE correo = ?";
        $stmt = $this->conexion->prepare($consulta);
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows > 0) {
            return "Ya existe un usuario con ese correo";
        } else {
            // Encriptamos la contraseña antes de almacenarla
            $contrasenaEncriptada = password_hash($contrasena, PASSWORD_DEFAULT);

            // Insertamos los datos del usuario, incluyendo la fecha de registro
            $consulta = "INSERT INTO usuarios (Nombre, apPaterno, apMaterno, correo, contrasena, fchRegistro) 
                VALUES (?, ?, ?, ?, ?, NOW())";

            $stmt = $this->conexion->prepare($consulta);
            $stmt->bind_param("sssss", $nombre, $apPaterno, $apMaterno, $correo, $contrasenaEncriptada);

            if ($stmt->execute()) {
                return "Usuario agregado correctamente.";
            } else {
                return "Error al agregar usuario: " . $stmt->error;
            }
        }
    }
}
?>
