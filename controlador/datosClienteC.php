<?php
require_once("../modelo/datosClientesM.php");

class UsuarioController {
    
    public static function actualizarDatos() {
        $config = require __DIR__ . '/../conexion.php'; // Archivo de configuración de la base de datos
        $conexion = new mysqli($config['servername'], $config['username'], $config['password'], $config['database']);
    
        // Verificar la conexión
        if ($conexion->connect_error) {
            die("Error en la conexión: " . $conexion->connect_error);
        }
    
        // Verificar que la sesión esté iniciada
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        
        // Obtener el correo del usuario desde la sesión
        $correo = $_SESSION['correo'];
        $usuarioModelo = new Usuario($conexion);
        
        // Obtener los datos actuales del usuario
        $datosUsuario = $usuarioModelo->obtenerDatosUsuario($correo);
    
        // Verificar si se envió el formulario de actualización
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $datosActualizados = array(
                'Nombre' => isset($_POST['Nombre']) ? $_POST['Nombre'] : '',
                'apPaterno' => isset($_POST['apPaterno']) ? $_POST['apPaterno'] : '',
                'apMaterno' => isset($_POST['apMaterno']) ? $_POST['apMaterno'] : '',
                'Correo' => isset($_POST['Correo']) ? $_POST['Correo'] : '',
                'Telefono' => isset($_POST['Telefono']) ? $_POST['Telefono'] : ''  // Agregamos Telefono aquí
            );
        
            // Actualizar los datos en la base de datos
            $usuarioModelo->actualizarDatos($correo, $datosActualizados);
        
            // Redirigir al usuario o mostrar mensaje de éxito
            header("Location: ../vista/inicioCliente.php");
            exit;
        }
        
        // Cerrar la conexión
        $conexion->close();
        
        // Retornar los datos del usuario para usarlos en la vista
        return $datosUsuario;
    }
}

// Llamada al método actualizarDatos para obtener datos del usuario
$datosUsuario = UsuarioController::actualizarDatos();
?>
