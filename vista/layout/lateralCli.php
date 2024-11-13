<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentro Gato</title>
    <link rel="stylesheet" href="d_empleado.css">
</head>
<body>
    <div class="menu">
        <ion-icon name="menu-outline"></ion-icon>
        <ion-icon name="close-outline"></ion-icon>
    </div>

    <div class="barra-lateral">
        <div class="nombre-pagina">
            <ion-icon id="cloud" name="storefront-outline"></ion-icon>
            <span>Gato</span>
        </div>

        <nav class="navegacion">
            <ul>
                <li><a id="inbox" href="inicioCliente.php"><ion-icon name="person-circle-outline"></ion-icon><span>Perfil</span></a></li>
                <li><a href="Npedido.php"><ion-icon name="cart-outline"></ion-icon><span>Nuevo pedido</span></a></li>
                <li><a href="historialCli.php"><ion-icon name="file-tray-full-outline"></ion-icon><span>Historial de pedidos</span></a></li>
                <li><a href="#"><ion-icon name="golf-outline"></ion-icon><span>Rutas</span></a></li>
                <li><a href="#"><ion-icon name="trending-up-outline"></ion-icon><span>Reportes</span></a></li>
            </ul>
        </nav>

        <div class="modo-oscuro">
            <div class="info"><span></span></div>
            <div class="switch"></div>
        </div>

        <div class="usuario">
            <img src="/Jhampier.jpg" alt="">
            <div class="info-usuario">
                <div class="nombre-email">
                    <span class="nombre"><?php echo $_SESSION['nombreCompleto'] ?? 'Invitado'; ?></span>
                    <span class="email"><?php echo $_SESSION['correo'] ?? 'correo@ejemplo.com'; ?></span>
                </div>
                <a href="salida" style="color: black;">
                    <ion-icon name="log-out-outline"></ion-icon>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
