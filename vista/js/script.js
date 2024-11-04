// Seleccionamos los elementos que van a alternar las vistas
const signInButton = document.getElementById('sign-in');
const signUpButton = document.getElementById('sign-up');
const containerRegister = document.querySelector('.container-form.register');
const containerLogin = document.querySelector('.container-form.login');

// Evento para mostrar el formulario de inicio de sesión
signInButton.addEventListener('click', () => {
    containerRegister.classList.add('hide'); // Oculta el formulario de registro
    containerLogin.classList.remove('hide'); // Muestra el formulario de inicio de sesión
});

// Evento para mostrar el formulario de registro
signUpButton.addEventListener('click', () => {
    containerLogin.classList.add('hide'); // Oculta el formulario de inicio de sesión
    containerRegister.classList.remove('hide'); // Muestra el formulario de registro
});

