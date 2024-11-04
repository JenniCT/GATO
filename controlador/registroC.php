<?php
session_start();
require_once("../modelo/registroM.php");
require_once("../modelo/sesionM.php");

class RegistroController {
    public static function registrarUsuario() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $config = require __DIR__ . '/../config.php';
            $conexion = new mysqli($config['servername'], $config['username'], $config['password'], $config['database']);

            // Verificamos si la conexión fue exitosa
            if ($conexion->connect_error) {
                die(json_encode(['success' => false, 'message' => 'La conexión falló: ' . $conexion->connect_error]));
            }

            // Extraemos y procesamos los datos del formulario
            $nombreCompleto = isset($_POST['nombreCompleto']) ? trim($_POST['nombreCompleto']) : '';
            $correo = isset($_POST['correo']) ? trim($_POST['correo']) : '';
            $contrasena = isset($_POST['contrasena']) ? trim($_POST['contrasena']) : '';

            // Dividimos el nombre completo
            $nombreParts = explode(" ", $nombreCompleto);
            $nombre = $nombreParts[0]; // Primer nombre
            $aPaterno = isset($nombreParts[1]) ? $nombreParts[1] : ''; // Segundo nombre (apellido)
            $aMaterno = isset($nombreParts[2]) ? $nombreParts[2] : ''; // Tercer nombre (apellido)

            $sesion = new Sesion($conexion); // Instancia un objeto de la clase Sesion
            $existeCorreo = $sesion->existeCorreo($correo); // Llama al método existeCorreo()

            if ($existeCorreo) {
                // Si el correo ya existe, redireccionar a la página de inicio de sesión
                echo "<script>alert('Ya existe un usuario con ese correo');</script>";
                header("Location: ../vista/form_sesion.php");
                exit();
            } else {
                // Si el correo no existe, continuar con el registro
                $registro = new Registro($conexion); // Instancia un objeto de la clase Registro
                $mensaje = $registro->registrarUsuario($nombre, $aPaterno, $aMaterno, $correo, $contrasena);
                
                // Redireccionar según el mensaje del registro
                if ($mensaje === "Usuario agregado correctamente.") {
                    // Guardamos el correo del usuario en la sesión
                    $_SESSION['correo'] = $correo;
                    header("Location: ../vista/TipoUsuario.php");
                    exit();
                } else {
                    echo $mensaje; // Manejo de errores si es necesario
                }
            }

            // Cerramos la conexión después de utilizarla
            $conexion->close();
        }
    }
}

// Llamamos a la función registrarUsuario del controlador RegistroController
RegistroController::registrarUsuario();
?>
