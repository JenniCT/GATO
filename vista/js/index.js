const navbarToggle = document.getElementById('navbar-toggle');
    const navbarMenu = document.getElementById('navbar-menu');

    navbarToggle.addEventListener('click', () => {
        navbarMenu.classList.toggle('active');
        // Mostrar u ocultar el menú
        if (navbarMenu.classList.contains('active')) {
            navbarMenu.style.display = 'flex'; // Muestra el menú
        } else {
            navbarMenu.style.display = 'none'; // Oculta el menú
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('a[href="#content"]').addEventListener('click', function(e) {
            e.preventDefault(); // Evita el comportamiento predeterminado
            document.querySelector('.content').scrollIntoView({
                behavior: 'smooth' // Desplazamiento suave
            });
        });
    
        document.querySelector('a[href="#contacto-gato"]').addEventListener('click', function(e) {
            e.preventDefault(); // Evita el comportamiento predeterminado
            document.querySelector('.contacto-gato').scrollIntoView({
                behavior: 'smooth' // Desplazamiento suave
            });
        });
        document.querySelector('a[href="#tiendas-gato"]').addEventListener('click', function(e) {
            e.preventDefault(); // Evita el comportamiento predeterminado
            document.querySelector('.tiendas-gato').scrollIntoView({
                behavior: 'smooth' // Desplazamiento suave
            });
        });
    });
    
    // Crear el mapa con coordenadas centradas en Tuxtla Gutiérrez
var map = L.map('mapa-gato').setView([16.7528, -93.1167], 13);

// Cargar las capas del mapa desde OpenStreetMap
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

// Agregar los marcadores para las tiendas

// Tienda 1
var marker1 = L.marker([16.7557, -93.1124]).addTo(map);
marker1.bindPopup("<b>Tienda Gato 1</b><br>Calle 1, Colonia Centro, Tuxtla Gutiérrez, Chiapas").openPopup();

// Tienda 2
var marker2 = L.marker([16.7471, -93.1099]).addTo(map);
marker2.bindPopup("<b>Tienda Gato 2</b><br>Avenida 2, Colonia Las Palmas, Tuxtla Gutiérrez, Chiapas").openPopup();
