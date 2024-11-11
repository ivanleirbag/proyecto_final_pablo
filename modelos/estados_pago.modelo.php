<?php

require_once 'conexion.php';

class ModeloEstadosPago
{

    /*=============================================
MOSTRAR DATOS
=============================================*/
    static public function mdlMostrarEstados($tabla, $item, $valor)
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
                $stmt = Conexion::conectar()->prepare("SELECT * FROM estados_pago");
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
    static public function mdlAgregarEstado($tabla, $datos)
    {
        try {
            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(estado_pago) VALUES (:estado_pago)");

            // UN ENLACE POR CADA DATO, TENER EN CUENTA EL TIPO DE DATO STR O INT
            $stmt->bindParam(":estado_pago", $datos["estado_pago"], PDO::PARAM_STR);

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

    static public function mdlEditarEstado($tabla, $datos)
    {
        try {
            $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET estado_pago = :estado_pago
                                                          WHERE id_estado_pago = :id_estado_pago");
            
            $stmt->bindParam(":estado_pago", $datos["estado_pago"], PDO::PARAM_STR);
            $stmt->bindParam(":id_estado_pago", $datos["id_estado_pago"], PDO::PARAM_INT);

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
    static public function mdlEliminarEstado($tabla, $dato)
    {
        try {
            $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_estado_pago = :id_estado_pago");
            $stmt->bindParam(":id_estado_pago", $dato, PDO::PARAM_INT);
            if ($stmt->execute()) {
                return "ok";
            } else {
                return "error";
            }
        }catch (Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }
}
