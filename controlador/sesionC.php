<?php
session_start();
require_once("../modelo/sesionM.php");

class SesionController {
    public static function verificarCorreo() {
        $config = require __DIR__ . '/../conexion.php';
        $conexion = new mysqli($config['servername'], $config['username'], $config['password'], $config['database']);

        if ($conexion->connect_error) {
            die(json_encode(['success' => false, 'message' => 'Conexión fallida.']));
        }

        $vcorreo = trim($_POST['userEmail'] ?? '');
        $sesionModelo = new Sesion($conexion);
        $tipoUsuario = $sesionModelo->obtenerTipoUsuario($vcorreo);

        if ($tipoUsuario) {
            // Almacena los datos en la sesión
            self::iniciarSesion($sesionModelo, $vcorreo);

            // Redirecciona según el tipo de usuario
            $redirecciones = [
                'admin' => '../vista/AdminDashboard.php',
                'Cliente' => '../vista/inicioCliente.php',
                'Empleado' => '../vista/d_empleado.php'
            ];
            header("Location: " . ($redirecciones[$tipoUsuario] ?? '../vista/form_sesion.php?error=Tipo de usuario no reconocido'));
            exit();
        } else {
            header("Location: ../vista/form_sesion.php?error=Correo no encontrado");
            exit();
        }

        $conexion->close();
    }

    private static function iniciarSesion($sesionModelo, $correo) {
        $usuario = $sesionModelo->obtenerUsuario($correo);
        if ($usuario) {
            $_SESSION['IdUsuario'] = $usuario['IdUsuario'];
            $_SESSION['nombreCompleto'] = $usuario['nombreCompleto'];
            $_SESSION['correo'] = $usuario['correo'];
        } else {
            error_log("Error al iniciar sesión: usuario no encontrado.");
        }
    }
}

SesionController::verificarCorreo();
?>
