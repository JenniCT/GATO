<!DOCTYPE html>
<html lang="es-Mex">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <title>Gato</title>
</head>
<body>
    <header class="navbar">
        <div class="navbar-logo">
            <img src="https://images.vexels.com/media/users/3/132714/isolated/preview/74d58196411ca35175184c3436cb31fc-cara-de-gato-bruja.png" alt="Logo ">
            <span class="navbar-title">Gato</span>
        </div>
        <div class="navbar-toggle" id="navbar-toggle">
            <ion-icon name="menu-outline"></ion-icon> <!-- Icono para el menú -->
        </div>
        <nav class="navbar-menu" id="navbar-menu">
            <ul>
                <li><a href="#tiendas-gato"><ion-icon name="location-outline"></ion-icon> Sucursales</a></li>
                <li><a href="#content"><ion-icon name="clipboard-outline"></ion-icon> Servicios</a></li>
                <li><a href="#"><ion-icon name="planet-outline"></ion-icon> Rastreo</a></li>
                <li><a href="#contacto-gato"><ion-icon name="mail-outline"></ion-icon> Contacto</a></li>
                <li><a href="#"><ion-icon name="ellipsis-horizontal-outline"></ion-icon> Nosotros</a></li>
                <li><a href="form_sesion.php">Iniciar sesión/Registrate</a></li>
            </ul>
        </nav>
    </header>
    
    
    
    <section class="hero">
        <h1>Bienvenido a Gato</h1>
        <p class="hero-subtitle">Donde tus envíos siempre caen de pie.</p>
        <p class="hero-description">¡Rápido, ágil y siempre en la dirección correcta!</p>
    </section>

    <section class="tiendas-gato">
        <h2>Tiendas en Tuxtla Gutiérrez, Chiapas</h2>
        <div class="tiendas-listado">
            <!-- Tienda 1 -->
            <div class="tienda">
                <h3>Tienda Gato 1</h3>
                <p>Dirección: Calle 1, Colonia Centro, Tuxtla Gutiérrez, Chiapas</p>
                <p>Teléfono: +52961 123 4567</p>
            </div>
    
            <!-- Tienda 2 -->
            <div class="tienda">
                <h3>Tienda Gato 2</h3>
                <p>Dirección: Avenida 2, Colonia Las Palmas, Tuxtla Gutiérrez, Chiapas</p>
                <p>Teléfono: +52961 765 4321</p>
            </div>
        </div>
    
        <!-- Mapa -->
        <div id="mapa-gato"></div>
    </section>
    

    <main class="content">
        <h2>Servicios Nacionales y Estatales</h2>
        <div class="service-container">

            <div class="service-card">
                <img src="img/envio.jpg" alt="Mensajería" class="service-image"> <!-- Ajusta la ruta de la imagen -->
                <h3>Mensajería</h3>
                <p><strong>NACIONAL</strong><br>Entregas en 24, 48, 72, 96, 120 hrs</p>
                <p><strong>ESTATALES</strong><br>Más de 240 países (Express, terrestre)</p>
                <p><strong>EXPRESS</strong><br>Entrega el mismo día antes de las 12, 24 y 48 hrs</p>
            </div>
            <div class="service-card">
                <img src="img/envio2.jpg" alt="Carga" class="service-image"> <!-- Ajusta la ruta de la imagen -->
                <h3>Carga</h3>
                <p><strong>NACIONAL</strong><br>Servicios FTL</p>
                <p><strong>INTERNACIONAL</strong><br>Servicios LTL, Servicios FTL y Servicios Marítimos</p>
            </div>
        </div>
    </main>

    <section class="servicios-gato">
    <h2>Servicios Agregados</h2>
    <p>Ponemos todos nuestros esfuerzos para facilitar tus envíos. Rápido, sencillo, sin preocupaciones.</p>
    <div class="servicio-card">
        <div class="icono"><ion-icon name="home"></ion-icon></div>
        <h3>Entrega a Domicilio</h3>
        <p>Nada como recibir tus envíos en casa o en la oficina. Porque tu tiempo y tu comodidad son lo más importante.</p>
    </div>
    <div class="servicio-card">
        <div class="icono"><ion-icon name="logo-dropbox"></ion-icon></div>
        <h3>Recolección a Domicilio</h3>
        <p>Tu tiempo vale oro. Envía sin salir de tu casa u oficina, ¡nosotros recogemos tus envíos hasta donde estés!</p>
    </div>
    <div class="servicio-card">
        <div class="icono"> <ion-icon name="key"></ion-icon> </div>
        <h3>Seguro</h3>
        <p>Asegura tu mercancía por el monto del valor declarado. Cuando el monto es alto, custodiamos tu envío en tramos de alto riesgo ¡sin costo adicional!</p>
    </div>
</section>

<section class="contacto-gato">
    <div class="container">
        <h2>Contacto</h2>
        <p>¿Tienes alguna duda o comentario? ¡En Gato estamos aquí para ayudarte a seguir explorando!</p>
        <p>Puedes comunicarte con nosotros por cualquiera de nuestros medios.</p>

        <div class="info-contacto">
            <div class="medio-contacto">
                <h3>Teléfono de Gato</h3>
                <p><a href="tel:+528008210208">+52 800 821 0208</a></p>
                <p>Estamos disponibles para resolver tus dudas.</p>
            </div>
            <div class="medio-contacto">
                <h3>Envíos Online</h3>
                <p>¿Realizaste una compra en línea y tienes alguna duda sobre tu envío? <a href="#">Haz clic aquí</a> para obtener más información.</p>
            </div>
            <div class="medio-contacto">
                <h3>Solicitud de Indemnización</h3>
                <p><a href="#">¿Tu paquete sufrió daños o faltantes? Llena esta solicitud para recibir asistencia.</a></p>
            </div>
        </div>

        <h3>Déjanos tus datos y un miembro del equipo Gato se pondrá en contacto contigo.</h3>

        <form class="form-contacto" action="#" method="post">
            <div class="campo-form">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="campo-form">
                <label for="apellido">Apellido</label>
                <input type="text" id="apellido" name="apellido" required>
            </div>
            <div class="campo-form">
                <label for="telefono">Teléfono</label>
                <input type="tel" id="telefono" name="telefono" required>
            </div>
            <div class="campo-form">
                <label for="correo">Correo electrónico</label>
                <input type="email" id="correo" name="correo" required>
            </div>
            <div class="campo-form">
                <label for="empresa">Empresa (opcional)</label>
                <input type="text" id="empresa" name="empresa">
            </div>
            <div class="campo-form">
                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" name="mensaje" rows="4"  required></textarea>
            </div>
            <div class="campo-form">
                <label for="asunto">Asunto</label>
                <select id="asunto" name="asunto" required>
                    <option value="" disabled selected>Selecciona un asunto</option>
                    <option value="consulta">Consulta general</option>
                    <option value="soporte">Soporte técnico</option>
                    <option value="envio">Envío de pedidos</option>
                    <option value="otro">Otro</option>
                </select>
            </div>

            <button type="submit" class="btn-enviar">Enviar mensaje</button>
        </form>
    </div>
</section>


<footer class="footer-gato">
    <div class="footer-contenido">
        <div class="footer-seccion">
            <h4>Enlaces Rápidos</h4>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Acerca de</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </div>
        <div class="footer-seccion">
            <h4>Contacto</h4>
            <p>Dirección: Bouleverd Belizario Dominguez 123, Tuxtla Gutierrez, Mexico</p>
            <p>Teléfono: +123 456 7890</p>
            <p>Email: contacto@gato.com</p>
        </div>
        <div class="footer-seccion">
            <h4>Síguenos</h4>
            <div class="footer-redes">
                <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                <a href="#"><ion-icon name="logo-whatsapp"></ion-icon></i></a>
                <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
            </div>
        </div>
    </div>
    <div class="footer-copy">
        <p>&copy; 2024 Gato. Todos los derechos reservados.</p>
    </div>
</footer>



<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="js/index.js"></script>
    
</body>
</html>