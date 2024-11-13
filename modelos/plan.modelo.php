<?php

require_once 'conexion.php';

class ModeloPlanes
{
    /*=============================================
    MOSTRAR PLANES
    =============================================*/
    static public function mdlMostrarPlanes($tabla, $item, $valor)
    {
        if ($item != null) {
            // Obtener un solo registro
            try {
                $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
                $stmt->bindParam(":" . $item, $valor, PDO::PARAM_INT);
                $stmt->execute();
                return $stmt->fetch(PDO::FETCH_ASSOC);
            } catch (Exception $e) {
                return "Error: " . $e->getMessage();
            }
        } else {
            // Obtener todos los registros
            try {
                $stmt = Conexion::conectar()->prepare("SELECT p.id_plan, p.descrip_plan, p.cod_plan, p.duracion_plan, p.sesiones_semanales_plan, p.nombre_plan, e.nombre_entrenador, e.apellido_entrenador 
                                                                FROM plan p INNER JOIN entrenadores e ON e.id_entrenador = p.id_entrenador;");
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (Exception $e) {
                return "Error: " . $e->getMessage();
            }
        }
    }

    /*=============================================
    AGREGAR PLAN
    =============================================*/
    static public function mdlAgregarPlan($tabla, $datos)
    {
        try {
            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(descrip_plan, cod_plan, duracion_plan, sesiones_semanales_plan, nombre_plan, id_entrenador) 
                                                   VALUES (:descrip_plan, :cod_plan, :duracion_plan, :sesiones_semanales_plan, :nombre_plan, :id_entrenador)");

            $stmt->bindParam(":descrip_plan", $datos["descrip_plan"], PDO::PARAM_STR);
            $stmt->bindParam(":cod_plan", $datos["cod_plan"], PDO::PARAM_INT);
            $stmt->bindParam(":duracion_plan", $datos["duracion_plan"], PDO::PARAM_INT);
            $stmt->bindParam(":sesiones_semanales_plan", $datos["sesiones_semanales_plan"], PDO::PARAM_INT);
            $stmt->bindParam(":nombre_plan", $datos["nombre_plan"], PDO::PARAM_STR);
            $stmt->bindParam(":id_entrenador", $datos["id_entrenador"], PDO::PARAM_INT);

            if ($stmt->execute()) {
                return "ok";
            } else {
                return "error";
            }
        } catch (Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }

    /*=============================================
    EDITAR PLAN
    =============================================*/
    static public function mdlEditarPlan($tabla, $datos)
    {
        try {
            $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET 
                                                   descrip_plan = :descrip_plan, 
                                                   cod_plan = :cod_plan, 
                                                   duracion_plan = :duracion_plan, 
                                                   sesiones_semanales_plan = :sesiones_semanales_plan, 
                                                   nombre_plan = :nombre_plan, 
                                                   id_entrenador = :id_entrenador 
                                                   WHERE id_plan = :id_plan");

            $stmt->bindParam(":descrip_plan", $datos["descrip_plan"], PDO::PARAM_STR);
            $stmt->bindParam(":cod_plan", $datos["cod_plan"], PDO::PARAM_INT);
            $stmt->bindParam(":duracion_plan", $datos["duracion_plan"], PDO::PARAM_INT);
            $stmt->bindParam(":sesiones_semanales_plan", $datos["sesiones_semanales_plan"], PDO::PARAM_INT);
            $stmt->bindParam(":nombre_plan", $datos["nombre_plan"], PDO::PARAM_STR);
            $stmt->bindParam(":id_entrenador", $datos["id_entrenador"], PDO::PARAM_INT);
            $stmt->bindParam(":id_plan", $datos["id_plan"], PDO::PARAM_INT);

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
    ELIMINAR PLAN
    =============================================*/
    static public function mdlEliminarPlan($tabla, $dato)
    {
        try {
            $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_plan = :id_plan");
            $stmt->bindParam(":id_plan", $dato, PDO::PARAM_INT);
            
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
