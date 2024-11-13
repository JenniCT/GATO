<?php
class Registro {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function registrarUsuario($nombre, $apPaterno, $apMaterno, $correo, $contrasena) {
        // Verificamos si el correo ya existe
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

            // Insertamos los datos del usuario en la tabla Usuarios
            $consulta = "INSERT INTO usuarios (Nombre, apPaterno, apMaterno, correo, contrasena, fchRegistro) 
                VALUES (?, ?, ?, ?, ?, NOW())";

            $stmt = $this->conexion->prepare($consulta);
            $stmt->bind_param("sssss", $nombre, $apPaterno, $apMaterno, $correo, $contrasenaEncriptada);

            if ($stmt->execute()) {
                // Obtener el IdUsuario recién creado
                $idUsuario = $stmt->insert_id;

                // Insertar en la tabla Clientes usando el IdUsuario
                $consultaCliente = "INSERT INTO clientes (IdCliente, IdUsuario, Histcomp) VALUES (?, ?, '')";
                $stmtCliente = $this->conexion->prepare($consultaCliente);
                $stmtCliente->bind_param("ii", $idUsuario, $idUsuario);

                if ($stmtCliente->execute()) {
                    return "Usuario y cliente agregados correctamente.";
                } else {
                    return "Error al agregar cliente: " . $stmtCliente->error;
                }
            } else {
                return "Error al agregar usuario: " . $stmt->error;
            }
        }
    }

    public function existeCorreo($correo) {
        $sql = "SELECT COUNT(*) FROM usuarios WHERE correo = ?";
        $stmt = $this->conexion->prepare($sql);

        if ($stmt === false) {
            die("Error preparando la consulta: " . $this->conexion->error);
        }

        $stmt->bind_param("s", $correo); // Se asume que el campo 'correo' es una cadena
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();
        $stmt->close();

        // Si el correo existe, retorna true, de lo contrario false
        return $count > 0;
    }
    
}
?>
