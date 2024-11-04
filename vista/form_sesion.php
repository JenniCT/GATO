<!DOCTYPE html>
<html lang="es-Mex">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form_sesion.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Registrate o Ingresa a tu Cuenta</title>
</head>
<body>
    <!-- Contenedor principal del formulario de registro -->
    <div class="container-form register">
        
        <!-- Parte izquierda del formulario con un mensaje de bienvenida -->
        <div class="information">
            <div class="info-childs">
                <h2>Bienvenido</h2>
                <p>Para unirte a nuestra comunidad por favor Inicia Sesión con tus datos</p>
                <!-- Botón para cambiar al formulario de inicio de sesión -->
                <input type="button" value="Iniciar Sesión" id="sign-in">
            </div>
        </div>

        <!-- Parte derecha del formulario donde se ingresa la información de registro -->
        
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Crear una Cuenta</h2>
                <!-- Formulario de registro -->
                <form action="../controlador/registroC.php" class="form form-register" method="POST" enctype="multipart/form-data">
                    <!-- Campo para el nombre completo -->
                    <div>
                        <label>
                            <i class='bx bx-user' ></i>
                            <input id="nombreCompleto" type="text" placeholder="Nombre Completo" name="userName" minlength="3" class="input-field form-control" required>
                        </label>
                    </div>
                    <!-- Campo para el correo electrónico -->
                    <div>
                        <label>
                            <i class='bx bx-envelope' ></i>
                            <input id="correo" type="email" placeholder="Correo Electronico" name="userEmail" class="input-field form-control" required>
                        </label>
                    </div>
                    <!-- Campo para la contraseña -->
                    <div>
                        <label>
                            <i class='bx bx-lock-alt' ></i>
                            <input id="contrasena" type="password" placeholder="Contraseña" name="userPassword" minlength="6" required>
                        </label>
                    </div>
                    <!-- Botón para enviar el formulario de registro -->
                    <input type="submit" value="Registrarse">
                </form>
            </div>
        </div>
    </div>


    <!-- Contenedor para el formulario de inicio de sesión (inicialmente oculto) -->
    <div class="container-form login hide">
        <!-- Parte izquierda con un mensaje de bienvenida -->
        <div class="information">
            <div class="info-childs">
                <h2>¡¡Bienvenido nuevamente!!</h2>
                <p>Para unirte a nuestra comunidad por favor Inicia Sesión con tus datos</p>
                <!-- Botón para cambiar al formulario de registro -->
                <input type="button" value="Registrarse" id="sign-up">
            </div>
        </div>

        <!-- Parte derecha del formulario donde se ingresa la información de inicio de sesión -->
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Iniciar Sesión</h2>
                <p>Inicia Sesión con tu cuenta</p>
                <!-- Formulario de inicio de sesión -->
                <form class="form form-login" method="POST" action="sesioncontrol">
                    <!-- Campo para el correo electrónico -->
                    <div>
                        <label>
                            <i class='bx bx-envelope' ></i>
                            <input type="email" placeholder="Correo Electronico" name="userEmail" required>
                        </label>
                    </div>
                    <!-- Campo para la contraseña -->
                    <div>
                        <label>
                            <i class='bx bx-lock-alt' ></i>
                            <input type="password" placeholder="Contraseña" name="userPassword" minlength="6" required>
                        </label>
                    </div>
                    <!-- Botón para enviar el formulario de inicio de sesión -->
                    <input type="submit" value="Iniciar Sesión"> 
            </div>
        </div>
    </div>

    <!-- Enlace al archivo de JavaScript para la interacción de los formularios -->
    <script src="js/script.js"></script>
</body>

</html>