<?php

require_once 'conexion.php';

class ModeloPagos
{

    /*=============================================
MOSTRAR DATOS
=============================================*/
    static public function mdlMostrarPagos($tabla, $item, $valor)
    {
        if ($item != null) {
            //pedimos un solo registro
            try {
                $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
                //enlace de parametros
                $stmt->bindParam(":" . $item, $valor, PDO::PARAM_INT);
                $stmt->execute();
                return $stmt->fetch(PDO::FETCH_ASSOC);
            } catch (Exception $e) {
                return "Error: " . $e->getMessage();
            }
        } else {
            // pedimos todos los registros
            try {
                $stmt = Conexion::conectar()->prepare("SELECT p.id_pago, l.nombre_plan, p.fecha_pago, p.monto_pago, c.nombre_cliente, c.apellido_cliente, e.estado_pago,
                                                            m.nombre_metodoPago FROM pagos as p
                                                            INNER JOIN clientes as c ON p.id_cliente = c.id_cliente
                                                            INNER JOIN estados_pago as e ON p.id_estado = e.id_estado_pago
                                                            INNER JOIN metodopago as m ON p.id_metodopago = m.id_metodopago
                                                            INNER JOIN plan as l ON l.id_plan = p.id_plan");
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (Exception $e) {
                return "Error: " . $e->getMessage();
            }
        }
    }

    // Agregar datos

    /*=============================================
AGREGAR DATOS
=============================================*/
    static public function mdlAgregarPago($tabla, $datos)
    {
        try {
            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_pago,id_plan, fecha_pago, monto_pago, id_cliente, id_estado, id_metodopago) 
                                                            VALUES (:id_pago,:id_plan, :fecha_pago, :monto_pago, :id_cliente, :id_estado, :id_metodopago)");

            // UN ENLACE POR CADA DATO, TENER EN CUENTA EL TIPO DE DATO STR O INT
            
            $stmt->bindParam(":id_plan", $datos["id_plan"], PDO::PARAM_INT);
            $stmt->bindParam(":id_pago", $datos["id_pago"], PDO::PARAM_INT);
            $stmt->bindParam(":fecha_pago", $datos["fecha_pago"], PDO::PARAM_STR);
            $stmt->bindParam(":monto_pago", $datos["monto_pago"], PDO::PARAM_STR); 
            $stmt->bindParam(":id_cliente", $datos["id_cliente"], PDO::PARAM_INT); 
            $stmt->bindParam(":id_estado", $datos["id_estado"], PDO::PARAM_INT);
            $stmt->bindParam(":id_metodopago", $datos["id_metodopago"], PDO::PARAM_INT);

            if ($stmt->execute()) {
                return "ok";
            } else {
                return "error";
            }
        } catch (Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }

    //editar datos

    static public function mdlEditarPago($tabla, $datos)
    {
        try {
            $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET 
                                                            id_plan = :id_plan, 
                                                            fecha_pago = :fecha_pago,
                                                            monto_pago = :monto_pago,
                                                            id_cliente = :id_cliente, 
                                                            id_estado = :id_estado, 
                                                            id_metodopago = :id_metodopago
                                                            WHERE id_pago = :id_pago");
            
            $stmt->bindParam(":id_pago", $datos["id_pago"], PDO::PARAM_INT);
            $stmt->bindParam(":id_plan", $datos["id_plan"], PDO::PARAM_INT);
            $stmt->bindParam(":fecha_pago", $datos["fecha_pago"], PDO::PARAM_STR);
            $stmt->bindParam(":monto_pago", $datos["monto_pago"], PDO::PARAM_STR); 
            $stmt->bindParam(":id_cliente", $datos["id_cliente"], PDO::PARAM_INT); 
            $stmt->bindParam(":id_estado", $datos["id_estado"], PDO::PARAM_INT);
            $stmt->bindParam(":id_metodopago", $datos["id_metodopago"], PDO::PARAM_INT);

            if ($stmt->execute()) {
                return "ok";
            } else {
                return print_r(Conexion::conectar()->errorInfo());
            }
        } catch (Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }

    /*=============================================
ELIMINAR DATO
=============================================*/
    static public function mdlEliminarPago($tabla, $dato)
    {
        try {
            $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_pago = :id_pago");
            $stmt->bindParam(":id_pago", $dato, PDO::PARAM_INT);
            if ($stmt->execute()) {
                return "ok";
            } else {
                return "error";
            }
        } catch (Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }
}
