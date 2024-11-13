<?php
class Usuario {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function obtenerDatosUsuario($correo) {
        $sql = "SELECT * FROM usuarios WHERE Correo = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param('s', $correo); 
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            echo "No se encontraron datos para el usuario con el correo: $correo";
            return null;
        }
    }

    public function actualizarDatos($correo, $datosActualizados) {
        $sql = "UPDATE usuarios SET Nombre = ?, apPaterno = ?, apMaterno = ?, Correo = ?, Telefono = ? WHERE Correo = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param(
            'ssssss',
            $datosActualizados['Nombre'], 
            $datosActualizados['apPaterno'], 
            $datosActualizados['apMaterno'], 
            $datosActualizados['Correo'], 
            $datosActualizados['Telefono'],  
            $correo
        );
    
        if ($stmt->execute()) {
            echo "Los datos se han actualizado correctamente.";
        } else {
            echo "Error al actualizar los datos: " . $this->conexion->error;
        }
    }
}
?>
