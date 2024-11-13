<?php
class Sesion {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function obtenerTipoUsuario($correo) {
        $stmt = $this->conexion->prepare("SELECT TipoUsuario FROM usuarios WHERE correo = ?");
        $stmt->bind_param("s", $correo);
        
        if (!$stmt->execute()) {
            error_log("Error en la consulta obtenerTipoUsuario: " . $stmt->error);
            return null;
        }
        
        $result = $stmt->get_result();
        return ($result->num_rows > 0) ? $result->fetch_assoc()['TipoUsuario'] : null;
    }

    public function existeCorreo($correo) {
        $stmt = $this->conexion->prepare("SELECT COUNT(*) FROM usuarios WHERE correo = ?");
        if ($stmt === false) {
            error_log("Error preparando existeCorreo: " . $this->conexion->error);
            return false;
        }
        
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();
        $stmt->close();
        
        return $count > 0;
    }

    public function obtenerUsuario($correo) {
        $stmt = $this->conexion->prepare("SELECT IdUsuario, nombre, apPaterno, apMaterno, correo FROM usuarios WHERE correo = ?");
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $row['IdUsuario'] = "{$row['IdUsuario']}";
            $row['nombreCompleto'] = "{$row['nombre']} {$row['apPaterno']} {$row['apMaterno']}";
            return $row;
        }
    
        return null;
    }
    
}
?>
