<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentro Gato</title>
    <link rel="stylesheet" href="css/d_empleado.css">
</head>
<body>
    <div class="menu">
        <ion-icon name="menu-outline"></ion-icon>
        <ion-icon name="close-outline"></ion-icon>
    </div>

    <div class="barra-lateral">
        <div>
            <div class="nombre-pagina">
                <ion-icon id="cloud" name="storefront-outline"></ion-icon>
                <span>Gato</span>
            </div>
        </div>

        <nav class="navegacion">
            <ul>
                <li>
                    <a id="inbox" href="#">
                        <ion-icon name="person-circle-outline"></ion-icon>
                        <span>Perfil</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="cart-outline"></ion-icon>
                        <span>Solicitudes</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="file-tray-full-outline"></ion-icon>
                        <span>Inventario</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="people-outline"></ion-icon>
                        <span>Clientes</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="ribbon-outline"></ion-icon>
                        <span>Control de Calidad </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="bag-handle-outline"></ion-icon>
                        <span>Productos </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="bus-outline"></ion-icon>
                        <span>Transporte</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="golf-outline"></ion-icon>
                        <span>Rutas </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="trending-up-outline"></ion-icon>
                        <span>Reportes</span>
                    </a>
                </li>
            </ul>
        </nav>

        <div>
            <div class="linea"></div>

            <div class="modo-oscuro">
                <div class="info">
                    <span></span>
                </div>
                <div class="switch">
                    
                </div>
            </div>
    
            <div class="usuario">
                <img src="/Jhampier.jpg" alt="">
                <div class="info-usuario">
                    <div class="nombre-email">
                        <span class="nombre">Malo caro</span>
                        <span class="email">Manolo@gmail.com</span>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <main>
        <div class="perfil_adentro">
            <div class="usuarioa">
                <img src="avatar.png" alt="Foto del usuario">
                <div class="info-usuario">
                    <p>ID Usuario: ******</p>
                    <input type="text" placeholder="Nombre completo">
                    <input type="email" placeholder="Correo electrónico">
                    <input type="tel" placeholder="Número de teléfono">
                </div>
            </div>
            
            <h3>Datos del empleado</h3>
            <div class="datos-empleado">
                <input type="text" placeholder="Área de trabajo">
                <input type="text" placeholder="Departamento">
                <input type="text" placeholder="Puesto">
                <input type="text" placeholder="Contacto de emergencia">
            </div>
            
            <h3>Dirección</h3>
            <div class="direccion">
                <input type="text" placeholder="Código postal">
                <input type="text" placeholder="Estado">
                <input type="text" placeholder="Municipio">
                <input type="text" placeholder="Colonia">
                <input type="text" placeholder="Calle">
                <input type="text" placeholder="No. Exterior">
                <input type="text" placeholder="No. Interior">
            </div>
        </div>
        
    </main>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="js/d_empleado.js"></script>
</body>
</html>