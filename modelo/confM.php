<?php
// Archivo: modelo/Pedido.php

class Pedido
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function crearPedido($IdUsuario, $Destinatario, $Descripcion, $Tamano, $Peso, $IdOrigen, $IdDestino, $MetodoEnvio, $Telefono)
    {
        try {
            $sql = "INSERT INTO pedidos (IdUsuario, Destinatario, Descripcion, Tamano, Peso, IdOrigen, IdDestino, MetodoEnvio, Telefono) 
                    VALUES (:IdUsuario, :Destinatario, :Descripcion, :Tamano, :Peso, :IdOrigen, :IdDestino, :MetodoEnvio, :Telefono)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':IdUsuario', $IdUsuario);
            $stmt->bindParam(':Destinatario', $Destinatario);
            $stmt->bindParam(':Descripcion', $Descripcion);
            $stmt->bindParam(':Tamano', $Tamano);
            $stmt->bindParam(':Peso', $Peso);
            $stmt->bindParam(':IdOrigen', $IdOrigen);
            $stmt->bindParam(':IdDestino', $IdDestino);
            $stmt->bindParam(':MetodoEnvio', $MetodoEnvio);
            $stmt->bindParam(':Telefono', $Telefono);

            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Error al crear el pedido: " . $e->getMessage();
            return false;
        }
    }
}
