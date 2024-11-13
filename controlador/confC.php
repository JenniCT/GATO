<?php
// Archivo: controlador/NpedidoC.php
include '../config.php';
include '../modelo/confM.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['IdUsuario'])) {
    die("Error: Usuario no autenticado. Por favor, inicia sesión.");
}

// Obtener valores de la sesión
$IdUsuario = $_SESSION['IdUsuario'];
$IdOrigen = isset($_SESSION['IdOrigen']) ? $_SESSION['IdOrigen'] : null;
$IdDestino = isset($_SESSION['IdDestino']) ? $_SESSION['IdDestino'] : null;

if (!$IdOrigen || !$IdDestino) {
    die("Error: IdOrigen o IdDestino no definidos.");
}

// Verificar que se hizo una solicitud POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener datos del formulario
    $Destinatario = $_POST['Nombre'];
    $Telefono = $_POST['telefono'];
    $Descripcion = $_POST['Descripcion'];
    $Tamano = $_POST['Tamano'];
    $Peso = $_POST['Peso'];
    $MetodoEnvio = $_POST['MetodoEnvio'];

    // Instanciar el modelo de Pedido y registrar el pedido
    $pedido = new Pedido($pdo);
    $resultado = $pedido->crearPedido($IdUsuario, $Destinatario, $Descripcion, $Tamano, $Peso, $IdOrigen, $IdDestino, $MetodoEnvio, $Telefono);

    // Redirigir al usuario a una página de éxito o error según el resultado
    if ($resultado) {
        header("Location: ../vista/success.php"); // Redirigir a una página de éxito
        exit;
    } else {
        echo "Hubo un error al registrar el pedido.";
    }
}
?>
