<?php
// Incluir configuración de la base de datos
include '../config.php';

// Verificar si el formulario fue enviado y si los datos necesarios están presentes
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['IdOrigen'], $_POST['IdDestino'], $_POST['Nombre'], $_POST['telefono'], $_POST['Descripcion'], $_POST['Tamano'], $_POST['Peso'], $_POST['metodoenvio'])) {
        // Obtener los datos del formulario
        $IdOrigen = $_POST['IdOrigen'];
        $IdDestino = $_POST['IdDestino'];
        $Nombre = $_POST['Nombre'];
        $telefono = $_POST['telefono'];
        $Descripcion = $_POST['Descripcion'];
        $Tamano = $_POST['Tamano'];
        $Peso = $_POST['Peso'];
        $MetodoEnvio = $_POST['metodoenvio'];
        $IdUsuario = $_SESSION['IdUsuario'];  // ID del usuario desde la sesión

        try {
            // Preparar la consulta SQL para insertar un nuevo pedido
            $sql = "INSERT INTO Pedidos (IdUsuario, IdOrigen, IdDestino, metodoenvio, Descripcion, Tamano, Peso, Destinatario) 
                    VALUES (:IdUsuario, :IdOrigen, :IdDestino, :metodoenvio, :Descripcion, :Tamano, :Peso, :Destinatario)";
            
            $stmt = $pdo->prepare($sql);
            // Vincular los parámetros
            $stmt->bindParam(':IdUsuario', $IdUsuario);
            $stmt->bindParam(':IdOrigen', $IdOrigen);
            $stmt->bindParam(':IdDestino', $IdDestino);
            $stmt->bindParam(':metodoenvio', $MetodoEnvio);
            $stmt->bindParam(':Descripcion', $Descripcion);
            $stmt->bindParam(':Tamano', $Tamano);
            $stmt->bindParam(':Peso', $Peso);
            $stmt->bindParam(':Destinatario', $Nombre);

            // Ejecutar la consulta
            $stmt->execute();

            // Redirigir o mostrar mensaje de éxito
            echo "Pedido registrado exitosamente.";
            // header('Location: algun_lugar.php'); // Redirigir si es necesario
        } catch (PDOException $e) {
            echo "Error al registrar el pedido: " . $e->getMessage();
        }
    } else {
        echo "Faltan datos del formulario.";
    }
}
?>
