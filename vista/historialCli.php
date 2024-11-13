<?php
include '../vista/layout/lateralCli.php';
?>

<main>  
    <div class="tabla-contenedor"> 
        <div class="clientes_adentro">
            
            <h2>Gestión de Clientes</h2>
            <div class="tabla-contenedor"> 
                <table class="tabla-clientes">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Destinatario</th>
                            <th>Descripcion</th>
                            <th>Teléfono</th>
                            <th>Origen</th>
                            <th>Destino</th>
                            <th>Metodo de envio</th>
                            <th>Fecha de solicitud</th>
                            <th>Fecha de entrega </th>
                            <th>Acciones </th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Sample row -->
                        <tr>
                            <td>001</td>
                            <td>Juan Pérez</td>
                            <td>Caja de lapices</td>
                            <td>+52 123 456 7890</td>
                            <td>Avenida arriaga 29019 Tuxtla Gutiterrez Chiapas</td>
                            <td>Avenida Tonala 29010 Tuxtla Gutiterrez Chiapas</td>
                            <td>Express o Economico o Estandar</td>
                            <td>2024-11-13 12:42:37</td>
                            <td>2024-11-13 12:42:37</td>

                            <td>
                                <button class="accion">Ver</button>
                                <!-- <button class="accion">Editar</button> -->
                                <button class="accion">Reporte</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
    </main>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="adentro.js"></script>
</body>
</html>