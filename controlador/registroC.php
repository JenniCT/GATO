<?php
session_start();
require_once("../modelo/registroM.php");
require_once("../modelo/sesionM.php");

class RegistroController {
    public static function registrarUsuario() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $config = require __DIR__ . '/../conexion.php';
            $conexion = new mysqli($config['servername'], $config['username'], $config['password'], $config['database']);

            if ($conexion->connect_error) {
                die(json_encode(['success' => false, 'message' => 'La conexión falló: ' . $conexion->connect_error]));
            }

            $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
            $aPaterno = isset($_POST['apPaterno']) ? trim($_POST['apPaterno']) : '';
            $aMaterno = isset($_POST['apMaterno']) ? trim($_POST['apMaterno']) : '';
            $correo = isset($_POST['correo']) ? trim($_POST['correo']) : '';
            $contrasena = isset($_POST['contrasena']) ? trim($_POST['contrasena']) : '';

            $sesion = new Sesion($conexion);
            $existeCorreo = $sesion->existeCorreo($correo);

            if ($existeCorreo) {
                echo "<script>alert('Ya existe un usuario con ese correo');</script>";
                header("Location: ../vista/form_sesion.php");
                exit();
            } else {
                // Si el correo no existe, continuar con el registro
                $registro = new Registro($conexion);
                $mensaje = $registro->registrarUsuario($nombre, $aPaterno, $aMaterno, $correo, $contrasena);

                if ($mensaje === "Usuario y cliente agregados correctamente.") {
                    $_SESSION['correo'] = $correo;
                    header("Location: ../vista/inicioCliente.php");
                    exit();
                } else {
                    echo $mensaje; // Manejo de errores si es necesario
                }
            }

            $conexion->close();
        }
    }
}

RegistroController::registrarUsuario();
?>
